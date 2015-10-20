(function($) {
	"use strict";
	$(document).ready(
			
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
						//var filterAttr = $(this).attr('data-filter').replace(/\./g, '');
						var filterAttr = $(this).attr('data-filter');
						// set filter in hash
						var queryString = '#filter=' + encodeURIComponent(filterAttr);
						// Replace the url with an additional query string
						$(this).attr('href', queryString);
						console.log(filterAttr);
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
							layoutMode : 'fitRows',
							fitRows : {
								gutter : '.gutter-sizer, .gutter-sizer2'
							},
							// use filterFns
							filter : hashFilter,
							hiddenStyle : {
								opacity : 0,
								transform : 'scale(0.001)'
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
						console.log(hashFilter);
					}

					$(window).on('hashchange', onHashchange);

					// trigger event handler to init Isotope
					onHashchange();

				});
			});
})(jQuery);
