jQuery(function ($) {
	$(document).ready(function () {

		//hero shrink animation

		let heroShrinker = function () {
			let hero = $('.hero-nav'),
				heroHeight = $('.hero-nav').outerHeight(true);


			$(hero).parent().css('padding-top', heroHeight - 38);

			$(window).scroll(function () {
				let scrollOffset = $(window).scrollTop();
				if (scrollOffset < heroHeight) {
					$(hero).css('height', (heroHeight - scrollOffset));

				}
				if (scrollOffset > (heroHeight - 250)) {
					hero.addClass('fixme');
				} else {
					hero.removeClass('fixme');

				}
			});
		};
		heroShrinker();
	});

});

let heroNav = document.querySelector('.hero-nav__inner--right');
let heroMobile = document.querySelector('.hero-nav__inner--right--mobile');


if (matchMedia) {
	const mq = window.matchMedia('(min-width: 768px)');
	mq.addListener(WidthChange);
	WidthChange(mq);
}

function WidthChange(mq) {
	if (mq.matches) {
		console.log('hello');
		heroNav.setAttribute('style', 'display: flex');
		heroMobile.setAttribute('style', 'display: none');

	} else {
		console.log('goodbye');
		heroNav.setAttribute('style', 'display: none');
		heroMobile.setAttribute('style', 'display: flex');

	}
}