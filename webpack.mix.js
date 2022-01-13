const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css')
.sass('resources/sass/error.scss', 'public/css')
.sass('resources/sass/puzzle.scss', 'public/css')
.sass('resources/sass/style.scss', 'public/css')
.sass('resources/sass/main.scss', 'public/css')
.sass('resources/sass/fontawesome.scss', 'public/css')
.sass('resources/sass/sidenav.scss', 'public/css');