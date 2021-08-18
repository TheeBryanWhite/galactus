'use strict';

$(document).ready(() => {
	$('.block-siteheader-menutoggle').click((event) => {
		event.preventDefault();

		if ($(this).attr('aria-expanded') === 'true') {
			$(this).attr('aria-expanded', 'false');
		} else {
			$(this).attr('aria-expanded', 'true');
		}

		$('.block-siteheader-nav').toggleClass('block-siteheader-nav-hidden');
	});
});
