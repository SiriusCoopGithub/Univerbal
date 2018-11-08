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

mix
    .disableNotifications()
    .copyDirectory('resources/fonts', 'public/fonts')
    .copyDirectory('resources/img', 'public/img')
    // .copyDirectory('resources/js/materialize.min.js', 'public/js')
    .js('resources/js/app-main.js', 'public/js')
    .sass('resources/sass/app-main.scss', 'public/css')
    .js('resources/js/admin-main.js', 'public/js')
    .sass('resources/sass/admin-main.scss', 'public/css')
    .browserSync({
        proxy: '127.0.0.1:8000',
        port: '3000',
        browser: 'chrome',
        notify: false
    });
