const mix = require('laravel-mix');
require('laravel-mix-purgecss');
mix.js('resources/js/app.js', 'js')
    .sass('resources/sass/style.scss', '')
    .purgeCss({
        content: [('*.php')],
        enabled: true,
    })
    .options({
        autoprefixer: {
            options: {
                browsers: [
                    'last 2 versions',
                    'not dead',
                    'not ie <= 11',
                ]
            }
        },
        fileLoaderDirs:  {
          fonts: 'wp-content/themes/cooper/fonts'
      }
   });