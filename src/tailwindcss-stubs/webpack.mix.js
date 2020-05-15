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

mix.js('resources/js/src.js', 'public/js/app.js')
   .postCss('resources/css/src.css', 'public/css/app.css', [
   		require('tailwindcss')('./tailwind.config.js')
   	])

if (mix.inProduction()) {
  mix
   .version();
}
