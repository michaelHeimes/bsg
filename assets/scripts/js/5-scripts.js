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
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: true,
			rows: 0,
			appendDots: $(".bg-slide-dots"),
		    prevArrow: $(".bg-slide-prev"),
		    nextArrow: $(".bg-slide-next")
		});
	
	}
	
})(jQuery);