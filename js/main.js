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
let alternatesMobile = document.querySelector('.main__container--alternates');


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
		alternatesMobile.setAttribute('style', 'flex-direction: row');

	} else {
		console.log('goodbye');
		heroNav.setAttribute('style', 'display: none');
		heroMobile.setAttribute('style', 'display: flex');
		alternatesMobile.setAttribute('style', 'flex-direction: column');

	}
}

/* jQuery(function ($) {
	$(document).ready(function () {

		// image carousel

		setInterval(function () {
			$('#c > :first-child').fadeOut(1000, function () {
				$(this).next('li').fadeIn(5000).addClass('active').end().appendTo('#c');
			});
		});


	});

}); */