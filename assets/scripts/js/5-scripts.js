(function($) {
	'use strict';
	
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
	
	
})(jQuery);