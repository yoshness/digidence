export default function animations() {
	let tl = anime.timeline({
        easing: 'easeOutQuad'
    });

    tl
    .add({
        targets: '#js-hero-right',
        opacity: [0, 1],
        translateY: [50, 0],
        duration: 400,
        delay: 800
    }).add({
        targets: '#js-hero-image-2',
        opacity: [0, 1],
        scale: [0, 1],
        duration: 200,
        delay: 100
    }).add({
        targets: '#js-hero-image-3',
        opacity: [0, 1],
        scale: [0, 1],
        duration: 200,
        delay: 50
    })
    .add({
        targets: '#js-header',
        opacity: [0, 1],
        translateY: [-80, 0],
        duration: 250,
        delay: 150
    });

    setTimeout(() => {
    	$('#js-hero-image-1').addClass('is-visible');
    }, 0);
}