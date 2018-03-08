jQuery(function ($) {
	$(document).ready(function () {

		let heroShrinker = function () {
			let hero = $('.hero-nav'),
				heroHeight = $('.hero-nav').outerHeight(true);

			$(hero).parent().css('padding-top', heroHeight);

			$(window).scroll(function () {
				let scrollOffset = $(window).scrollTop();
				if (scrollOffset < heroHeight) {
					$(hero).css('height', (heroHeight - scrollOffset));
				}
				if (scrollOffset > (heroHeight - 215)) {
					hero.addClass('fixme');
				} else {
					hero.removeClass('fixme');
				}
			});
		};
		heroShrinker();


		$('.store-button-one').click(function () {
			$('.main__container--right--image--one').toggleClass('test');
		});
		$('.store-button-two').click(function () {
			$('.main__container--right--image--two').toggleClass('test');
		});
		$('.store-button-three').click(function () {
			$('.main__container--right--image--three').toggleClass('test');
		});

	});
});