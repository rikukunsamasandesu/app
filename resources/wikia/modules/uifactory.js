/**
 * JS version of Factory.class.php - part of UI repo API for rendering components
 *
 * UIFactory handles building component which means loading
 * assets and component configuration file
 *
 * @author Rafal Leszczynski <rafal@wikia-inc.com>
 *
 */

define('wikia.ui.factory', [
	'wikia.nirvana',
	'wikia.window',
	'wikia.loader',
	'wikia.ui.component',
	'jquery'
], function uifactory(
	nirvana,
	window,
	loader,
	UIComponent,
    $
) {

	'use strict';

	/**
	 * Request components configs from backend
	 *
	 * @param {[]} components array with names of the requested components
	 *
	 * @return {{}} promise with components configs
	 */

	function getComponentsConfig(components) {

		var deferred = new $.Deferred(),
			data = {
				components: components,
				cb: window.wgStyleVersion
		};

		nirvana.getJson(
			'Wikia\\UI\\UIFactoryApi',
			'getComponentsConfig',
			data,
			function(data) {
					deferred.resolve(data);
			},
			function(xhrObject) {
				deferred.reject(JSON.parse(xhrObject.responseText));
			}
		);

		return deferred.promise();

	}

	/**
	 * Creates a new instance of UI component
	 *
	 * @return {{}} new clean instance of UIComponent
	 */

	function getComponentInstance() {
		return new UIComponent;
	}

	/**
	 * Removes duplicates from an Array
	 *
	 * @param {[]} array Array with potential duplicated items
	 *
	 * @return {[]} array without duplicates
	 *
	 */

	// TODO: use jQuery helper methods for this or move this method to separate shared utility lib - waiting for decision about using jQuery in mobile skin

	function arrayUnique(array) {

		var o = {},
			uniqueArray = [];

		for (var i = 0; i < array.length; i++) {
			if (o.hasOwnProperty(array[i])) {
				continue;
			}
			uniqueArray.push(array[i]);
			o[array[i]] = 1;
		}

		return uniqueArray;

	}

	function collectComponents (node, componentList) {
		$.each(node, function( name, value) {
			if (name === 'component') {
				componentList.push(value);
			}
			if (typeof value === 'object') {
				collectComponents(value, componentList);
			}
		});
	}

	function recursiveRender(node, subComponents) {
		var result = '',
			tempVal = '';
//		// first add defaults
//		if (typeof node.params !== "undefined" && typeof node.params.component !== "undefined") {
//			node.params.vars = $.extend(
//				true,
//				{},
//				defaults[getKey(node.params.component, node.params.type || '')],
//				node.params.vars
//			);
//		}
		$.each(node, function( name, value ) {
			if ( typeof value === 'object' ) {
				tempVal = recursiveRender( value, subComponents);
				if (tempVal !== '') {
					node[name] = tempVal;
				}
			}
		});
		// render children
		if (typeof node.params !== 'undefined' && typeof node.params.component !== 'undefined') {
			result = subComponents[ node.params.component ].render( node.params );
		}
		return result;
	}

	function compile( params ) {
		var deferred = new $.Deferred(),
			componentList = [],
			subComponents = {},
			result = '',
			args;

		collectComponents( params, componentList );
		if ( componentList.length > 0 ) {
			init( arrayUnique( componentList ) ).then(function () {
				args = arguments;
				if ( componentList.length !== arguments.length ) {
					throw new Error( 'Not all sub components are loaded' );
				}
				componentList.forEach(function( element, index) {
					subComponents[ element ] = args[ index ];
				});
				recursiveRender( params, subComponents );
				deferred.resolve( params );
			});
		} else {
			deferred.resolve( params );
		}
		return deferred;
	}

	/**
	* Factory method for initialising components
	* (load assets dependencies and adds them to DOM + instantiates UI components and applies config to them)
	*
	* @param {String|[]} componentName Name of a single component or array with multiple components
	*
	* @return {{}} promise with UI components
	*/

	function init(componentName) {

		var deferred = new $.Deferred(),
			deferredAutoload = new $.Deferred(),
			components = [];

		if (!(componentName instanceof Array)) {
			componentName = [ componentName ];
		}

		getComponentsConfig(componentName).done(function(data) {

			var jsAssets = [],
				cssAssets = [],
				autoloadList = [],
				autoloadLength;

			data.components.forEach(function(element) {

				var component = getComponentInstance(),
					templateVarsConfig = element.templateVarsConfig,
					assets = element.assets,
					templates = element.templates,
					templateDefaults = element.defaults || {};

				if (assets) {
					jsAssets = jsAssets.concat(assets.js);
					cssAssets = cssAssets.concat(assets.css);
				}

				if (templateVarsConfig && templates) {
					component.setComponentsConfig(templates, templateVarsConfig, templateDefaults);
				}
				if ( element.autoload || null !== null ) {
					autoloadList.push( [ element.autoload, component ] );
				}
				components.push(component);
			});

			jsAssets = arrayUnique(jsAssets);
			cssAssets = arrayUnique(cssAssets);

			// TODO: temporary solution - to limit number of requests all assets will be fetched as strings in a single request while calling getComponentsConfig
			loader({
				type: loader.CSS,
				resources: cssAssets
			});

			function resolveDeferred() {
				deferred.resolve.apply(null, components);
			}

			if (jsAssets.length > 0) {
				loader({
					type: loader.JS,
					resources: jsAssets
				}).done( function () {
					autoloadLength = autoloadList.length;

					if ( autoloadList.length > 0 ) {
						autoloadList.forEach( function (element) {
							require( [ element[0] ], function ( uiComponent ) {
								element[1] = $.extend( element[1], uiComponent );
								autoloadLength--;
								if (autoloadLength === 0) {
									resolveDeferred();
								}
							})
						});
					} else {
						resolveDeferred();
					}
				});
			} else {
				resolveDeferred();
			}

		}).fail(function(data) {
			if (data.error) {
				throw new Error(data.error + ': ' + data.message);
			}
			deferred.reject();
		});

		return deferred.promise();

	}

	//Public API
	return {
		init: init,
		compile: compile
	}

});
