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

		const GALLERYMAIN = $('.section__gallery').magnificPopup({
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

		$('.galleryShow').click(function() {
			GALLERYMAIN.magnificPopup('open', 6);
		});

		$('.open-popup-link').click(function() {
			$('#roomTitleForm').val($(this).siblings(".roomTitle").text());
		});

		$('.open-popup-link').magnificPopup({
			type:'inline',
			midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		  });

		$('.sliderRooms').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
				  enabled:true
				}
			});
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
	
	/* Локализация datepicker */
$.datepicker.regional['ru'] = {
	closeText: "Закрыть",
	prevText: "&#x3C;Пред",
	nextText: "След&#x3E;",
	currentText: "Сегодня",
	monthNames: [ "Января","Февраля","Марта","Апрела","Мая","Июня",
	"Июля","Августа","Сентября","Октября","Ноября","Декабря" ],
	monthNamesShort: [ "Янв","Фев","Мар","Апр","Май","Июн",
	"Июл","Авг","Сен","Окт","Ноя","Дек" ],
	dayNames: [ "воскресенье","понедельник","вторник","среда","четверг","пятница","суббота" ],
	dayNamesShort: [ "вск","пнд","втр","срд","чтв","птн","сбт" ],
	dayNamesMin: [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
	weekHeader: "Нед",
	dateFormat: "dd.mm.yy",
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ""
};
$.datepicker.setDefaults($.datepicker.regional['ru']);

$("#forms__dateFrom").datepicker({
	dateFormat: "dd MM yy года",
	minDate: 0,
	onSelect: function (date) {
		var date2 = $('#forms__dateFrom').datepicker('getDate');
		date2.setDate(date2.getDate() + 1);
		$('#forms__dateTo').datepicker('setDate', date2);
		//sets minDate to dt1 date + 1
		$('#forms__dateTo').datepicker('option', 'minDate', date2);
	}
});
$('#forms__dateTo').datepicker({
	dateFormat: "dd MM yy года",
	onClose: function () {
		var dt1 = $('#forms__dateFrom').datepicker('getDate');
		var dt2 = $('#forms__dateTo').datepicker('getDate');
		if (dt2 <= dt1) {
			var minDate = $('#forms__dateTo').datepicker('option', 'minDate');
			$('#forms__dateTo').datepicker('setDate', minDate);
		}
	}
});

$('.sliderRooms').slick({
	dots: true,
	arrows: true,
	infinite: true,
	autoplay: true,
	autoplaySpeed: 2000,
	speed: 300,
	slidesToShow: 1,
  });

  document.addEventListener( 'wpcf7mailsent', function( event ) {
	$.magnificPopup.close();
	alert('Заявка успешно отправлено, скоро мы с Вами свяжемся для подтверждения брони. Спасибо');
  }, false );











	});

}(jQuery));
