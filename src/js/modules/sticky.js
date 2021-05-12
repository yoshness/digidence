export default function sticky() {
	const $header = $('#js-header');

	let offset = $('#js-header').outerHeight();

    $(window).scroll((e) => {
	    if ($(e.currentTarget).scrollTop() > offset) {
	        $header.addClass('is-sticky');
	    } else {
	        $header.removeClass('is-sticky');
	    }
	});
}