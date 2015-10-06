(function($) {
	"use strict";

	$(document).ready(function() {
		var isoDuration = '0.4s';
			
		var $grid = $('.grid').isotope({
			layoutMode: 'fitRows',
			itemSelector: '.grid-item',
			percentPosition: true,
			fitRows: {
				  gutter: '.gutter-sizer'
				},
			hiddenStyle: {
			      opacity: 0,
			      transform: 'scale(0.001)'
			    },
			    visibleStyle: {
			      opacity: 1,
			      transform: 'scale(1)'
			    },
			    transitionDuration:isoDuration
		});
	});
})(jQuery);