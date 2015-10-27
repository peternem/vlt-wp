(function($) {
	"use strict";
	$(window).load(
	function() {
		
		// filter functions
		function getHashFilter() {
			// get filter=filterName
			var matches = location.hash.match(/#filter=([^&]+)/i);
			var hashFilter = matches && matches[1];
			return hashFilter && decodeURIComponent(hashFilter);
			console.log(matches);
		}
	
		$(function() {

			var $grid = $('.grid');
	
			// bind filter button click
			var $filterButtonGroup = $('.filters');
			$filterButtonGroup.on('click', 'a', function() {
				var filterAttr = $(this).attr('data-filter');
				// set filter in hash
				var queryString = '#filter=' + encodeURIComponent(filterAttr);
				// Replace the url with an additional query string
				$(this).attr('href', queryString);
			});
	
			var isIsotopeInit = false;
			var isoDuration = '0.4s';
	
			function onHashchange() {
				var hashFilter = getHashFilter();
				if (!hashFilter && isIsotopeInit) {
					return;
				}
				isIsotopeInit = true;
				
				// filter isotope
				$grid.isotope({
					itemSelector : '.grid-item, .grid-item2',
					percentPosition: true,
					layoutMode : 'packery',
					packery: {
						  gutter: '.gutter-sizer, .gutter-sizer2'
						},
					filter : hashFilter,
					hiddenStyle : {
						opacity : 0,
						transform : 'scale(1)'
					},
					visibleStyle : {
						opacity : 1,
						transform : 'scale(1)'
					},
					transitionDuration : isoDuration
				});
				// set selected class on button
				if (hashFilter) {
					$filterButtonGroup.find('.selected').removeClass('selected');
					$filterButtonGroup.find('[data-filter="' + hashFilter + '"]') .addClass('selected');
				}
			}
	
			$(window).on('hashchange', onHashchange);
				
			// trigger event handler to init Isotope
			onHashchange();
			
			// layout Isotope after each image loads
//			$grid.imagesLoaded().progress( function() {
//				$grid.isotope('layout');
//			});
		});
	});
})(jQuery);
