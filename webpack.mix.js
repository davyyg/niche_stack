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
    .sass('resources/sass/app.scss', 'public/css')
    .copy( 'node_modules/froala-editor/css/froala_editor.pkgd.min.css', 'public/vendor/froala-editor/css/froala_editor.pkgd.min.css' )
    .copy( 'node_modules/froala-editor/js/froala_editor.pkgd.min.js', 'public/vendor/froala-editor/js/froala_editor.pkgd.min.js' );
