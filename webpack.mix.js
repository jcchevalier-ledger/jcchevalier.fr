const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/global/loading.js', 'public/js');
mix.js('resources/js/global/navbar.js', 'public/js');
mix.js('resources/js/landing_page/landing_page.js', 'public/js');

mix.sass('resources/sass/landing_page/landing_page.scss', 'public/css');
mix.sass('resources/sass/global/global.scss', 'public/css');

mix.copyDirectory('resources/images', 'public/images');
