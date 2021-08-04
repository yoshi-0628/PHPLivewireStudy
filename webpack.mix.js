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

mix.styles([
    'resources/css/foundation.css',
    'resources/css/foundation-float.css',
    'resources/css/foundation-prototype.css',
    'resources/css/foundation-rtl.css',    
    ], 'public/css/all.css');

mix.scripts([
    'resources/js/app.js',
    'resources/js/bootstrap.js',
    'resources/js/foundation.js',
    'resources/js/vendor.js',    
    ], 'public/js/all.js');