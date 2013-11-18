/**
 * JS version of Factory.class.php - part of UI repo API for rendering components
 *
 * UIFactory handles building component which means loading
 * assets and component configuration file
 *
 * @author Rafal Leszczynski <rafal@wikia-inc.com>
 *
 */

define( 'wikia.ui.factory', [
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

	function getComponentsConfig( components ) {

		var deferred = new $.Deferred(),
			data = {
				components: components,
				cb: window.wgStyleVersion
			};

		nirvana.getJson(
			'Wikia\\UI\\UIFactoryApi',
			'getComponentsConfig',
			data,
			function( data ) {
					deferred.resolve( data );
			},
			function( xhrObject ) {
				deferred.reject( JSON.parse( xhrObject.responseText ) );
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
		return new UIComponent();
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

	function arrayUnique( array ) {

		var o = {},
			uniqueArray = [],
			i;

		for ( i = 0; i < array.length; i++ ) {
			if ( o.hasOwnProperty( array[ i ] ) ) {
				continue;
			}
			uniqueArray.push( array[ i ] );
			o[ array[ i ] ] = 1;
		}

		return uniqueArray;

	}

	/**
	 * Compiles component definition containing sub components
	 *
	 * @param {{}} params Component definition
	 *
	 * @returns {Deferred} Promise with compiled component definition
	 *
	 */
	function compile( params ) {
		var deferred = new $.Deferred(),
			componentList = [],
			subComponents = {},
			args;

		/**
		 * Collects sub elements from compound component definition
		 *
		 * @param {{}} node Definition node to process
		 *
		 */
		function collectComponents( node) {
			$.each( node, function( name, value ) {
				if ( name === 'component' ) {
					componentList.push( value );
				}
				if ( typeof value === 'object' ) {
					collectComponents( value );
				}
			});
		}

		collectComponents( params );
		componentList = arrayUnique( componentList );

		if ( componentList.length > 0 ) {
			init( componentList ).then(function () {
				args = arguments;
				if ( componentList.length !== arguments.length ) {
					throw new Error( 'Not all sub components are loaded' );
				}
				componentList.forEach(function( element, index ) {
					subComponents[ element ] = args[ index ];
				});

				/**
				 * Compiles the component definition recursively
				 *
				 * @param {[]} node Node to compile
				 *
				 * @returns {string} rendered sub component
				 *
				 */
				function recursiveCompile( node ) {
					var compileResult = '';
					$.each( node, function( name, value ) {
						if ( typeof value === 'object' ) {
							compileResult = recursiveCompile( value );
							if ( compileResult !== '' ) {
								node[ name ] = compileResult;
							}
						}
					});
					compileResult = '';
					// compile children
					if ( typeof node.component !== 'undefined' ) {
						compileResult = subComponents[ node.component ].render( node );
					}
					return compileResult;
				}

				recursiveCompile( params );
				deferred.resolve( params );
			});
		} else {
			deferred.resolve( params );
		}
		return deferred.promise();
	}

	/**
	* Factory method for initialising components
	* (load assets dependencies and adds them to DOM + instantiates UI components and applies config to them)
	*
	* @param {String|[]} componentName Name of a single component or array with multiple components
	*
	* @return {{}} promise with UI components
	*/

	function init( componentName ) {

		var deferred = new $.Deferred(),
			components = [];

		if ( !( componentName instanceof Array ) ) {
			componentName = [ componentName ];
		}

		getComponentsConfig( componentName ).done(function( data ) {

			var jsAssets = [],
				cssAssets = [],
				autoLoadList = [],
				autoLoadLength;

			data.components.forEach(function( element ) {

				var component = getComponentInstance(),
					templateVarsConfig = element.templateVarsConfig,
					assets = element.assets,
					templates = element.templates,
					templateDefaults = element.defaults || {};

				if ( assets ) {
					jsAssets = jsAssets.concat( assets.js );
					cssAssets = cssAssets.concat( assets.css );
				}

				if ( templateVarsConfig && templates ) {
					component.setComponentsConfig( templates, templateVarsConfig, templateDefaults );
				}
				if ( element.autoload || null !== null ) {
					autoLoadList.push( [ element.autoload, component ] );
				}
				components.push( component );
			});

			jsAssets = arrayUnique( jsAssets );
			cssAssets = arrayUnique( cssAssets );

			// TODO: temporary solution - to limit number of requests all assets will be fetched as strings in a single request while calling getComponentsConfig
			loader({
				type: loader.CSS,
				resources: cssAssets
			});

			function resolveDeferred() {
				deferred.resolve.apply( null, components );
			}

			if ( jsAssets.length > 0 ) {
				loader({
					type: loader.JS,
					resources: jsAssets
				}).done(function () {
					autoLoadLength = autoLoadList.length;

					if ( autoLoadList.length > 0 ) {
						autoLoadList.forEach( function ( element ) {
							require( [ element[ 0 ] ], function ( uiComponent ) {
								element[ 1 ] = $.extend( element[ 1 ], uiComponent );
								autoLoadLength--;
								if ( autoLoadLength === 0 ) {
									resolveDeferred();
								}
							});
						});
					} else {
						resolveDeferred();
					}
				});
			} else {
				resolveDeferred();
			}

		}).fail(function( data ) {
			if ( data.error ) {
				throw new Error( data.error + ': ' + data.message );
			}
			deferred.reject();
		});

		return deferred.promise();

	}

	//Public API
	return {
		init: init,
		compile: compile
	};

});
