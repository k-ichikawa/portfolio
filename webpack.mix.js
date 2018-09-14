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
mix.copy('resources/css', 'public/css');
mix.copy('resources/fonts', 'public/fonts');
mix.copy('resources/images', 'public/images');
mix.copy('resources/sass', 'public/sass');
mix.copy('resources/js', 'public/js');

mix.js('resources/assets/js/components/nav/nav.js', 'public/assets/js');