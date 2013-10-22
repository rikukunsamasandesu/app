define( 'views.videopageadmin.categoryforms', [
		'jquery',
		'views.videopageadmin.autocomplete',
		'collections.videopageadmin.category',
		'views.videopageadmin.carousel',
		'collections.videopageadmin.carousel'
	], function( $, AutocompleteView, CategoryCollection, CarouselView, CarouselCollection ) {
		'use strict';

		var FormGroupView = Backbone.View.extend({
				initialize: function() {
					this.autocomplete = new AutocompleteView({
							el: this.el,
							collection: new CategoryCollection()
					});

					this.carousel = new CarouselView({
							collection: new CarouselCollection()
					});
				}
		});

		return FormGroupView;
});
