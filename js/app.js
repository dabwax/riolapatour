$(document).ready(function() {

	$.scrollIt();

	$(".p-home").parallax({
		imageSrc: 'img/home.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-lapa").parallax({
		imageSrc: 'img/lapa.jpg',
		position: 'top top',
		parallax: 'scroll'
	});

	$(".p-lapa2").parallax({
		imageSrc: 'img/lapa3.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-rio1").parallax({
		imageSrc: 'img/rio1.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-rio2").parallax({
		imageSrc: 'img/rio2.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-rio3").parallax({
		imageSrc: 'img/rio3.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	new WOW().init();

});