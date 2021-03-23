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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

    mix.styles([
        'resources/assets/front/css/bootstrap.min.css',
        'resources/assets/front/css/font-awesome.min.css',
        'resources/assets/front/css/animate.min.css',
        'resources/assets/front/css/owl.carousel.css',
        'resources/assets/front/css/owl.theme.css',
        'resources/assets/front/css/owl.transitions.css',
        'resources/assets/front/css/style.css',
        'resources/assets/front/css/responsive.css'
    ],'public/css/front.css');

