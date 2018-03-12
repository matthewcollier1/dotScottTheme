jQuery(function ($) {
	$(document).ready(function () {

		//hero shrink animation

		let heroShrinker = function () {
			let hero = $('.hero-nav'),
				heroHeight = $('.hero-nav').outerHeight(true);


			$(hero).parent().css('padding-top', heroHeight);

			$(window).scroll(function () {
				let scrollOffset = $(window).scrollTop();
				if (scrollOffset < heroHeight) {
					$(hero).css('height', (heroHeight - scrollOffset));

				}
				if (scrollOffset > (heroHeight - 90)) {
					hero.addClass('fixme');
				} else {
					hero.removeClass('fixme');

				}
			});
		};
		heroShrinker();
	});

});