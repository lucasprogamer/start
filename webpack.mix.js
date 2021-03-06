const { mix } = require('laravel-mix');
var LiveReloadPlugin = require('webpack-livereload-plugin');


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

mix.js([
        'resources/assets/js/app.js',
        'resources/assets/js/themes/scripts.js',
      ], 'public/admin/js')
   .js('resources/assets/js/themes/bootstrap-fileupload.min.js', 'public/admin/js')
   .sass('resources/assets/sass/app.scss', 'public/admin/css')
   .sass('resources/assets/sass/bootstrap-fileupload.min.scss', 'public/admin/css')
   .copyDirectory('resources/assets/images', 'public/admin/images');


mix.browserSync('start.app');
