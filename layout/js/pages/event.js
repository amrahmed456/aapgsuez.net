$(document).ready(function(){


    $('.event-slider').owlCarousel({
		loop:true,
		margin:5,
		nav:false,
		dots:true,
		autoplaySpeed:2000,
		autoplay:true,
		autoplayTimeout:4000,
		responsive:{
			0:{
				items:1
			}
		}
    });


});