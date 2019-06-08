/* footer sns */
jQuery(window).on('scroll', function ($) {
	if (100 < jQuery(this).scrollTop()) {
		jQuery('.footer-sns').addClass('m_fixed_sns');
		jQuery('body').addClass('m_fixed_sns');
	} else {
		jQuery('.footer-sns').removeClass('m_fixed_sns');
		jQuery('body').removeClass('m_fixed_sns');
	}
});