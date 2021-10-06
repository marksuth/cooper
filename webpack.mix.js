const mix = require('laravel-mix');
mix.js('resources/js/app.js', 'js')
    .sass('resources/sass/style.scss', '')
    .options({
        autoprefixer: {
            options: {
                browsers: [
                    'last 2 versions',
                    'not dead',
                ]
            }
        },
        fileLoaderDirs:  {
          fonts: 'wp-content/themes/cooper/fonts'
      }
   });