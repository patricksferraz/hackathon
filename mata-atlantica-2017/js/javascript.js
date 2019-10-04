$( document ).ready(function()
{
	$(".button-collapse").sideNav();
	$('.tooltipped').tooltip({delay: 50});
	
	$("#mobile-nav").mouseover(function(event) {
		$("#mobile-nav").css('overflow', 'scroll');
	});
	$("#mobile-nav").mouseout(function(event) {
		$("#mobile-nav").css('overflow', 'hidden');
	});

	$('.scrollspy').scrollSpy();

	$('.parallax').parallax();

	$(".dropdown-button").dropdown();

	$('.carousel').carousel();
	autoplay()   
	function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 10000);
	}
	$('.carousel.carousel-slider').carousel({fullWidth: true});
	$('.slider').slider();
	$('ul.tabs').tabs();
	$('.materialboxed').materialbox();
});
