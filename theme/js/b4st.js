/*
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

    // (function(k,o,t,e,l){
    //     l = document.createElement("script");
    //     l.type = "text/javascript";
    //     l.src = "https://bookonline24.ru/widget.js";
    //     l.async = !0;
    //     l.onload = l.onreadystatechange = function() {
    //         e = this.readyState;
    //         !o && (!e || e === "complete") && (o = 1) && k();
    //     };
    //     t = document.getElementsByTagName("script")[0];
    //     t.parentNode.insertBefore(l, t);
    // })(function(){
    //     HotelWidget.init({
    //         id: "04afa226-982a-4e12-b6d2-502b735cba21",
    //         type: "horizontalBlock",
    //         form: {
    //             // Замените ID элемента для виджета здесь
    //             container: "WidGetHotel",
    //         }
    //     }, "https://bookonline24.ru/");
    // });

		// Comments

		$('.commentlist li').addClass('card mb-3');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

		// const slider = $(".slider-item");
		// slider
		//   .slick({
		// 	dots: true,
		// 	vertical: true,
		// 	infinite: false,
		// 	arrows: false
		//   });
		
		// slider.on('wheel', (function(e) {
		//   e.preventDefault();
		
		//   if (e.originalEvent.deltaY > 0) {
		// 	$(this).slick('slickNext');
		//   } else {
		// 	$(this).slick('slickPrev');
		//   }
		// }));
		$("body").on('click', '[href*="#"]', function(e){
			var fixed_offset = 100;
			$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
			e.preventDefault();
		  });

		$('.photoBlock').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return '<small>хостел "У камина"</small>';
				}
			}
		});


	$(".sliderSection-1").slick({
		dots: true,
		vertical: false,
		infinite: false,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
			{
			  breakpoint: 767.98,
			  settings: {
				arrows: false
			  }
			}]
	});

	$(".reviewsSlider").slick({
		dots: false,
		vertical: false,
		infinite: true,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
			{
			  breakpoint: 767.98,
			  settings: {
				arrows: false,
				dots: true
			  }
			}]
	});

	let scrolled = $(this).scrollTop();
	if (scrolled > 50 || window.location.pathname !== '/') {
	    $('.header__nav').addClass('scrolled');
	    $('.main__animate').css('animation', 'none');
	    }

	$(window).scroll(function () {

    	let scrolled = $(this).scrollTop();
		
    	if (scrolled > 50) {
    	$('.header__nav').addClass('scrolled');
    	$('.main__animate').css('animation', 'none');
		}

    	if (scrolled <= 50 && window.location.pathname == '/') {
    	$('.header__nav').removeClass('scrolled');
    	}
    });


	});

}(jQuery));
