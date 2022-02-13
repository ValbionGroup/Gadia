const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

mix.js('resources/js/app.js', 'public/js')
    .scripts('resources/js/init-alpine.js', 'public/js/init-alpine.js')
    .scripts('resources/js/focus-trap.js', 'public/js/focus-trap.js')
    .postCss('resources/css/custom.css', 'public/css')
    .postCss('resources/css/flash.css', 'public/css')
    .postCss('resources/css/loading.css', 'public/css')
    .sass('resources/sass/main.scss', 'public/css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version();