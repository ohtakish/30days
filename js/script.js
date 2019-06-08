/* drawer */
jQuery('.drawer-icon').on('click', function () {
	jQuery('.drawer').toggleClass('m_checked');
});

jQuery(window).on('scroll', function ($) {
	if (100 < jQuery(this).scrollTop()) {
		jQuery('.floating').show();
	} else {
		jQuery('.floating').hide();
	}
});

/* SmoothScroll */
jQuery('a[href^="#"]').click(function () {
	var header = 0; // jQuery( '#header' ).height();
	var speed = 300;
	var id = jQuery(this).attr('href');
	var target = jQuery('#' == id ? 'html' : id);
	var position = jQuery(target).offset().top - header;
	if (0 > position) {
		position = 0;
	}
	jQuery('html, body').animate(
		{
			scrollTop: position
		},
		speed
	);
	return false;
});
