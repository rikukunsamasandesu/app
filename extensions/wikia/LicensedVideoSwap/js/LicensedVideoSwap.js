require( [
	'jquery',
	'lvs.callout',
	'lvs.commonajax',
	'lvs.ellipses',
	'lvs.swapkeep',
	'lvs.undo',
	'lvs.videocontrols',
	'lvs.suggestions',
	'lvs.tracker',
	'lvs.history'
], function( $, callout, commonAjax, ellipses, swapKeep, undo, videoControls, suggestions, tracker, History ) {

	"use strict";

	$(function() {
		var historyPage,
			$container = $( '#LVSGrid' );

		// track impression
		tracker.track({
			action: tracker.actions.IMPRESSION
		});

		callout.init();
		commonAjax.init( $container );
		ellipses.init( $container );
		swapKeep.init( $container );
		undo.init( $container );
		videoControls.init( $container );
		suggestions.init( $container );
		historyPage = new History({
			el: '.lvs-undo-list'
		});
	});
});
