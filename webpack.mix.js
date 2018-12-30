let mix = require('laravel-mix');

mix.js('_assets/js/app.js', 'assets/app.js')
   .sass('_assets/css/app.scss', 'assets/app.css')
   .copy('_assets/images', 'assets/images')
   .setPublicPath('/');