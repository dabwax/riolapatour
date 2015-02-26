$(document).ready(function() {

	var prefixo = $("body").data("prefixo");

	$.scrollIt();

	$(".p-home").parallax({
		imageSrc: prefixo + 'img/home.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-lapa").parallax({
		imageSrc: prefixo + 'img/lapa.jpg',
		position: 'top top',
		parallax: 'scroll'
	});

	$(".p-lapa2").parallax({
		imageSrc: prefixo + 'img/lapa3.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-rio1").parallax({
		imageSrc: prefixo + 'img/rio1.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-rio2").parallax({
		imageSrc: prefixo + 'img/rio2.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	$(".p-rio3").parallax({
		imageSrc: prefixo + 'img/rio3.jpg',
		position: 'bottom bottom',
		parallax: 'scroll'
	});

	new WOW().init();

});