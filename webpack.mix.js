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

//mix.js('resourcess/js/app.js', 'public/js')
  // .sass('resourcess/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/jquery.fancybox.min.css',
    'resources/assets/css/nice-select.css',
    'resources/assets/css/owl.carousel.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/custom.css',
    'resources/assets/css/all.min.css',
], 'public/assets/app.css').version();

mix.styles([
    'resources/assets/js/jquery-3.3.1.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/owl.carousel2.thumbs.min.js',
    'resources/assets/js/jquery.countdown.min.js',
    'resources/assets/js/jquery.fancybox.min.js',
    'resources/assets/js/jquery.nice-select.min.js',
    'resources/assets/js/scripts.js',
], 'public/assets/app.js').version();

mix.copy('resources/assets/fonts' , 'public/assets/fonts')
mix.copy('resources/assets/images' , 'public/assets/images')

/**
 * Dashboard
 */
mix.styles([
    'resources/assets/css/dashboard/style.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/dashboard/daterangepicker.css',
    'resources/assets/css/dashboard/currency-flags.min.css',
    'resources/assets/css/dashboard/bootstrap-select.min.css',
    'resources/assets/css/dashboard/ex-css.css',
    'resources/assets/css/all.min.css',
], 'public/assets/dashboard.css').version();

mix.styles([
    'resources/assets/js/dashboard/jquery.min.js',
    'resources/assets/js/dashboard/bootstrap.bundle.min.js',
    'resources/assets/js/dashboard/moment.min.js',
    'resources/assets/js/dashboard/daterangepicker.js',
    'resources/assets/js/dashboard/bootstrap-select.min.js',
    'resources/assets/js/dashboard/custom.js',
], 'public/assets/dashboard.js').version();
