$(function() {

		//кнопка "вверх"
		$('.top').click(function() {
			$('html, body').stop().animate({scrollTop: 0}, 'slow', 'swing');
		});
		$(window).scroll(function() {
			if ($(this).scrollTop() > $(window).height()) {
				$('.top').addClass("active");
			} else {
				$('.top').removeClass("active");
			};
		});

	//активация hamburger кнопки
	$('.hamburger').click(function(){
		$(this).toggleClass('is-active')
	});

	//активация equalHeights
	// function heightses() {
	// 	$(".class").height('auto').equalHeights();
	// }
	// $(window).resize(function() {
	// 	heightses();
	// });
	// heightses();

	//активация Scroll2id
	// $("a[href*='#']").mPageScroll2id();
	// or
	// $(".container a").mPageScroll2id({
	// 	highlightClass: "active"
	// });

	//активация WOW.js
	// new WOW().init();

	//активация slick slider
	$('.sbis_ru-Logos_container').slick();

});
