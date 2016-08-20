jQuery(document).ready(function($) {

	$(window).load(function() {
		$('#loader').fadeOut('slow');
	});

	var slider = $('#mainSlider');

	slider.owlCarousel({
		items: 1,
		autoHeight: true,
		loop: true,
    	autoplay: true,
	    autoplayTimeout: 5000,
	    autoplayHoverPause: false,
	    mouseDrag: false,
	});

	$('#sliderNextBtn').click(function() {
    	slider.trigger('next.owl.carousel', [300]);
	})
	$('#sliderPrevBtn').click(function() {
    	slider.trigger('prev.owl.carousel', [300]);
	})

	new WOW().init();


});