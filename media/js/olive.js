function screen_height() {
	var height = $(window).height();
	$('header.big').css('height', height);
	$('.interests').width($('.title h1').width());
	//$('nav ul.main-nav').css('padding-top', height / 4.5)
}

$(function() {
	var isMobile = /Android|webOS|iPhone|iPod|BlackBerry|iPad/i.test(navigator.userAgent) ? true : false;
	if (isMobile == true) {

	}

	$(window).load(function(){
		$('body').addClass('animated fadeInDown');
	});

	$(window).resize(function() {
		screen_height()
	});

	$(document).ready(function() {
		screen_height();
	});


	$(window).scroll(function(){

	});


	$('a.fader').click(function(e){
		e.preventDefault();
		var currentTarget = $(e.currentTarget);
		$('body').addClass('animated fadeOutUp');
		$('body').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			window.location.href = currentTarget.attr('href');
		});
	});

	new WOW().init();

});