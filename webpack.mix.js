const mix = require('laravel-mix');

mix
  .js('src/main.js', 'dist/a1-helpers.bundle.js')
  .sass('src/scss/main.scss', 'css/a1-helpers.bundle.css')
  .react()
  .options({ processCssUrls: false }) 
  .setPublicPath('dist')