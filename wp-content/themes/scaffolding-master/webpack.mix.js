const mix = require('laravel-mix');

mix.sass('scss/style.scss', 'css')
	.sass('scss/login.scss', 'css')
	.sass('scss/editor-styles.scss', 'css')
	.sass('scss/blocks/homepage-banner.scss', 'css/blocks')
	.sass('scss/blocks/recent-posts.scss', 'css/blocks')
	.sass('scss/libs/fontawesome/all.scss', 'css/libs/fontawesome')
	.sass('scss/libs/fontawesome/brands.scss', 'css/libs/fontawesome')
	.sass('scss/libs/fontawesome/fontawesome.scss', 'css/libs/fontawesome')
	.sass('scss/libs/fontawesome/regular.scss', 'css/libs/fontawesome')
	.sass('scss/libs/fontawesome/solid.scss', 'css/libs/fontawesome')
	.sass('scss/libs/fontawesome/v4-shims.scss', 'css/libs/fontawesome')
	.options({
		processCssUrls: false
	});
