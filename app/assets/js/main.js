function learnMore(dataId) {
	var div = jQuery('#ebooks [data-id="' + dataId + '"]');
	div.find('.limit-height').addClass('active');
	div.find('.learn-more').hide();
}
function scrollToContent() {
	$([document.documentElement, document.body]).animate({
		200
    }, 2000);
}