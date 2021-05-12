import 'slick-carousel';

export default function initSliders() {
	$('#js-works-slider').slick({
		autoplay: true,
  		slidesToShow: 3,
		cssEase: 'ease-out',
		prevArrow: $('#js-works-slider .js-slider-prev'),
		nextArrow: $('#js-works-slider .js-slider-next')
	});
}