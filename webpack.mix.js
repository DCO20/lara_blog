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
    .styles('resources/views/assets/css/bootstrap.min.css', 'public/assets/css/bootstrap.min.css')
    .styles('resources/views/assets/css/all.min.css', 'public/assets/css/all.min.css')
    .styles('resources/views/assets/css/clean-blog.min.css', 'public/assets/css/clean-blog.min.css')

    .scripts('resources/views/assets/js/jquery.min.js', 'public/assets/js/jquery.min.js')
    .scripts('resources/views/assets/js/bootstrap.bundle.min.js', 'public/assets/js/bootstrap.bundle.min.js')
    .scripts('resources/views/assets/js/clean-blog.min.js', 'public/assets/js/clean-blog.min.js')
    
    .copyDirectory('resources/views/assets/img', 'public/assets/img')

    .options({
        processCssUrls: false
    })

    .version();
