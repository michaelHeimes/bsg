(function($) {
	'use strict';
	
	$(document).on('click', 'a#menu-toggle', function(){
		$('header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header').removeClass('off-canvas-content is-open-right has-transition-push');
	});
	
	if( $('.press-slider').length ) {
	
		$('.press-slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: false
		});
		
		$('.press-slider ul.slick-dots').prepend('<button class="prev">prev</button>');
		$('.press-slider ul.slick-dots').append('<button class="next">next</button>');
	
		
		$('.press-slider button.prev').click(function(){
		    $('.press-slider').slick("slickPrev");
		});
		
		$('.press-slider button.next').click(function(){
		    $('.press-slider').slick("slickNext");
		});
	
	}
	
})(jQuery);