function learnMore(dataId) {
	var div = jQuery('#ebooks [data-id="' + dataId + '"]');
	div.find('.limit-height').addClass('active');
	div.find('.learn-more').hide();
}
function scrollToContent() {
	jQuery([document.documentElement, document.body]).animate({
		scrollTop: jQuery("#ebooks").offset().top
	}, 2000);
}