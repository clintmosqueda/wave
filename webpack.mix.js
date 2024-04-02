let mix = require('laravel-mix');
const themePath = 'wave'

mix
  .options({
    processCssUrls: false
  })
  .js(`wp-content/themes/${themePath}/src/js/app.js`, `wp-content/themes/${themePath}/assets/js/`)
  .sass(`wp-content/themes/${themePath}/src/scss/app.scss`, `wp-content/themes/${themePath}/assets/css/`)

mix.browserSync({
  proxy: `http://localhost:8888/${themePath}/`,
  files: ["wp-content/**/*.css", "wp-content/**/*.php", "wp-content/**/*.js"],
});