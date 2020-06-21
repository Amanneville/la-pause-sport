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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/meteo.js', 'public/js')
    .copy('node_modules/@fullcalendar/core/main.css', 'public/css/fullcalendar/core')
    .copy('node_modules/@fullcalendar/core/main.js', 'public/js/fullcalendar/core')
    .copy('node_modules/@fullcalendar/daygrid/main.css', 'public/css/fullcalendar/daygrid')
    .copy('node_modules/@fullcalendar/daygrid/main.js', 'public/js/fullcalendar/daygrid')
    .sass('resources/sass/app.scss', 'public/css');
