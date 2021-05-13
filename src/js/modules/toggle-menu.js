export default function toggleMenu() {
    const $header = $('#js-header');
    const $toggle = $('#js-toggle-menu');

    $toggle.on('click', (e) => {
        $('html, body').toggleClass('is-locked');
        $(e.currentTarget).toggleClass('is-open');

        $('#js-menu').toggleClass('is-shown');
        $header.toggleClass('is-open');
    });
}