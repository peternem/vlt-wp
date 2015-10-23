(function($) {
	"use strict";

	$(document).ready(function() {

		/* JQuery BxSlider init */
		jQuery('.bxslider').bxSlider({
		  pagerCustom: '#bx-pager',
		  controls: false,
		});
		
		
		$('.btn-filter').click( function() {
			$('.filter-container').slideToggle( "fast");
			$(this).find('i').toggleClass('fa-angle-down fa-angle-up');
		});
		

		$('.filter-btn').click( function() {
			$(this).find('i').toggleClass('')
		});
		
		// change is-checked class on buttons
		$('.moody, .styles').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', 'a', function() {
				$buttonGroup.find('.selected').removeClass('selected');
				$( this ).addClass('selected');
			});
		});
		
	    
	    
		/* superFish */
		$("ul.sf-menu").superfish({
			autoArrows: false,
			dropShadows: false
		});
		
		/* Mobile menu */
		$('.mobile-menu-toggle').click( function() {
			$('#navigation').slideToggle("normal", function() {
				$('#navigation').toggleClass('test height');
			});
			$('body').toggleClass('fixed-page');
		});
		
		/*lightbox*/
		$("a.fancybox").fancybox({
			openEffect: 'elastic',
			closeEffect: 'elastic',
			padding : 10,
			margin : 40,
			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					css : {
						'background' : 'rgba(0, 0, 0, 0.75)'
					}
				}
			}
		});
		
		/* scroll to top */
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('a[href=#toplink]').fadeIn();
			} else {
				$('a[href=#toplink]').fadeOut();
			}
		});
		$('a[href=#toplink]').on('click', function(){
			$('html, body').animate({scrollTop:0}, 'normal');
			return false;
		});
		
		/* animate comments scroll */
		$(".comment-scroll a").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 'normal');
		});
	
	});

	$(window).load(function() {

		$('div#load-more').addClass('display-element');

		function wpex_staticheader() {
			var $header_height = $('.fixed-header').outerHeight();
			var $h_height = $('#header').outerHeight();
			console.log($header_height)
			$('.fixed-header').css({
				position: 'fixed',
				top: 0,
				left: 0
			});
			$('#wrap').css({
				paddingTop: $h_height + 10
			});	
		}
		
		wpex_staticheader();
		
		$(window).resize(function () {
			wpex_staticheader();
		});
		
		$(window).bind('orientationchange', function(event) {
			var $header_height = $('.fixed-header').outerHeight();
			var $h_height = $('#header').outerHeight();
			$('#wrap').css({
				paddingTop: $h_height
			});
		});

		if ($(window).width() > 767) {
			$('.wpex-tooltip').tipsy({ fade: true, gravity: 's' });
		}
		
		
	});
	
$(document).on('click','.filter legend', function(event) {
    $('.filter form').slideToggle().attr('aria-expanded', function (i, attr) {
    return attr == 'true' ? 'false' : 'true'; });
});
$(document).on('click','.filter input[type="submit"]', function(event) {
    $('.filter form').slideToggle().attr('aria-expanded', function (i, attr) {
    return attr == 'true' ? 'false' : 'true'; });
});
$('.filter input[type="submit"]').addClass('symple-button');

$(document).on('change','input[type="checkbox"]', function(event) {
if ( $('input[type="checkbox').is(':checked') ) {
    $(this).parent('label').addClass('checked');
} 
else {
    $(this).parent('label').removeClass('checked');
}
});





})(jQuery);

