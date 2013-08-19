describe("lvsHistory", function () {
	"use strict";

	it('just a test', function() {
		console.log('test lvs test');
	});

	it('should return a constructor function', function() {
		var mock = require(['lvs.history', function(x) {
			console.log(x);
		}]);
		console.log(mock);
	});

	require( ['lvs.history'], function( lvshistory ) {
		console.log(lvshistory);
		it('just a test', function() {
			console.log('test lvs test2');
			console.log( lvshistory );
		});





	} );



});