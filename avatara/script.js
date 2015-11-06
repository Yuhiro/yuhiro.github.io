$(function(){

	var scrollBufferHeader = 32;

	var navbar = $('.navbar');
	var header = $('.header');
	var navSpacer = $('.nav-spacer');
    var footer = $('footer');

    var toggleNavbar = $('.toggle-navbar');
	var scrollToTop = $('footer .scroll-to-top');

	$(document).ready(function(){
		setNavSpacerHeight();
        setFooterPosition();
	});

	$(window).scroll(function(){
		resizeHeader();
	});

	scrollToTop.click(function(){
		scrollPageTop();
	});

    toggleNavbar.click(function(){
        navbar.toggleClass('navbar-inverse');
    });

	function setNavSpacerHeight(){
		navSpacer.height(navbar.outerHeight() + header.outerHeight());
	}

	function resizeHeader(){
		var scrollTop = $(window).scrollTop();
		if (scrollTop > scrollBufferHeader){
			navbar.addClass('compressed');
			header.addClass('scrolled');

			scrollToTop.stop().animate({ bottom: '20px'}, 150, 'linear');
		} else {
			navbar.removeClass('compressed');
			header.removeClass('scrolled');

			scrollToTop.stop().animate({ bottom: '-50px'}, 100, 'linear');
		}
	}

	function scrollPageTop(){
		$('html, body').animate({ scrollTop: 0 }, 200);
	}

    function setFooterPosition(){
        if ($(window).height() > $('#footerBottom').position().top){
            footer.addClass('fixed');
        }
    }
});