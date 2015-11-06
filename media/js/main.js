function screen_height() {
	var height = $(window).height();
	$('header.big').css('height', height);
}

function showMobileMenu() {
	$('nav.nav-mobile').addClass('open');
	$('nav.nav-mobile button').removeClass('animated zoomIn').addClass('animated zoomOut');
	$('nav.nav-mobile .nav-mobile-container').removeClass('clear zoomOut').addClass('animated zoomIn');
}
function hideMobileMenu() {
	$('nav.nav-mobile').removeClass('open');
	$('nav.nav-mobile button').removeClass('animated zoomOut').addClass('animated zoomIn');
	$('nav.nav-mobile .nav-mobile-container').addClass('clear zoomIn').addClass('animated zoomOut');
}

$(function() {
	var isMobile = /Android|webOS|iPhone|iPod|BlackBerry|iPad/i.test(navigator.userAgent) ? true : false;
	if (isMobile == true) {
		$('header, .image').css('background-attachment', 'scroll');
		$('.title, .interests, .portrait-container').addClass('mobile');
		$('.btn-down').hide()
	}

	$(window).load(function(){
		$('#preloader').addClass('clear');

		screen_height();

		setInterval(function(){
			$('.scroll-me-down').addClass('animated pulse continuous');
		}, 500);

		setInterval(function(){
			var blingItem = $('.interests .bling');
			var nextBlingItem = blingItem.next();

			blingItem.removeClass('bling');

			if (nextBlingItem.length){
				nextBlingItem.addClass('bling');
			} else {
				$('.interests li:first-child').addClass('bling');
			}
		}, 1550);
	});

	$(window).resize(function() {
		screen_height()
	});

	$(document).ready(function() {
		screen_height();
	});


	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		var scrollMeDown = $('.scroll-me-down');
		var nav = $('nav.navbar');
		var navMobile = $('nav.nav-mobile');

		var headerOverlay = $('header > .overlay');
		if (scrollTop > 30){
			scrollMeDown.addClass('hide');
			headerOverlay.addClass('clear');

			nav.removeClass('fadeOutUp').addClass('animated fadeInDown');
			navMobile.removeClass('fadeOutUp').addClass('animated fadeInDown');
		}
		else if (scrollTop < 30) {
			scrollMeDown.removeClass('hide');
			headerOverlay.removeClass('clear');

			nav.removeClass('fadeInDown').addClass('animated fadeOutUp');
			navMobile.removeClass('fadeInDown').addClass('animated fadeOutUp');
			hideMobileMenu();
		}
	});


	$('.scroll-me-down i.fa').click(function(){
		var pos = $('#main').offset();
		$('html, body').animate({ scrollTop: pos.top }, 550, "easeInOutCubic");
	});

	$('nav a').click(function(e){
		e.preventDefault();
		var currentTarget = $(e.currentTarget);
		var screenPadding = -49;
		if (isMobile) { screenPadding = 1; }


		if (currentTarget.attr('href') != '#'){
			var pos = $(currentTarget.attr('href')).offset();
			$('html, body').animate({ scrollTop: pos.top + screenPadding }, 750, "easeInOutCubic");
		}
	});

	$('nav.nav-mobile a').click(function(){
		hideMobileMenu();
	});

	$('nav.nav-mobile button').click(function(){
		var menu = $('nav.nav-mobile');
		var menuContainer = menu.find('.nav-mobile-container');

		if (menuContainer.hasClass('clear')){
			showMobileMenu();
		}
		else {
			hideMobileMenu();
		}
	});

	$('a.fader').click(function(e){
		e.preventDefault();
		var body = $('body');
		var currentTarget = $(e.currentTarget);
		body.addClass('animated fadeOutUp');
		body.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			window.location.href = currentTarget.attr('href');
		});
	});

	$('.gal img').hover(function(){
		$(this).addClass('zoom');
	}, function(){
		$(this).removeClass('zoom');
	});

	$('.swipebox').swipebox({
		loopAtEnd: true,
		hideBarsDelay : 5000
	});

	$('.recommendation').click(function(){
		$('.tooltip-fancy').removeClass('hovering');
		$(this).parents('.tooltip-fancy').toggleClass('hovering');
	});

	$('.close-recommendation a').click(function(e){
		e.preventDefault();
		$(e.currentTarget).parents('.tooltip-fancy').removeClass('hovering');
	});

	new WOW().init();
});