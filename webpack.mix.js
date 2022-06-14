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

mix
    .sass('resources/scss/style.scss','public/assets/css/style.css')
    .sass('node_modules/bootstrap-icons/font/bootstrap-icons.scss','public/assets/css/bootstrap-icons.css')

    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/assets/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js','public/assets/js/bootstrap.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map','public/assets/js/bootstrap.bundle.min.js.map')
    
