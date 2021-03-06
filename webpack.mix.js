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
  //  .copy('./node_modules/wowjs', 'public/plugins/wowjs')
  //  .copy('./node_modules/jquery-confirm', 'public/plugins/jquery-confirm')
  //  .copy('./node_modules/popper.js', 'public/plugins/popper.js')
  //  .copy('./node_modules/signature_pad', 'public/plugins/signature_pad')
  //  .copy('./node_modules/inputmask', 'public/plugins/inputmask')
  //  .copy('./node_modules/jquery-ui', 'public/plugins/jquery-ui')
  //  .copy('./node_modules/sweetalert', 'public/plugins/sweetalert')
  // .copy('./node_modules/datatables.net-dt', 'public/plugins/datatables.net-dt')
   .sass('resources/sass/app.scss', 'public/css');