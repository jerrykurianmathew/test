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

mix.js('resources/js/app.js', 'public/app/js')
    .sass('resources/sass/app.scss', 'public/app/css');
mix.styles([
        'public/assets/css/*.css',
    ], 'public/app/assets/build/all.css');
    mix.scripts([
        'public/assets/js/*.js'
    ],'public/app/assets/build/all.js');
