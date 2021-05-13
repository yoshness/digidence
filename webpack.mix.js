let mix = require('laravel-mix');

const  ASSETS_FOLDER = './wp-content/themes/digidence/assets';

mix.js(`src/js/app.js`, ASSETS_FOLDER)
	.sass('src/sass/style.scss', ASSETS_FOLDER)
    .options({
		processCssUrls: false,
    })
    .copyDirectory('src/fonts', `${ASSETS_FOLDER}/fonts`)
    .copyDirectory('src/images', `${ASSETS_FOLDER}/images`);