const elixir = require('laravel-elixir');

elixir(mix => {
  // use mix.sass to compile sass to css
  mix.sass('app.scss', 'resources/assets/css');
  // use mix.style to combine app.css + slick.css -> public/css/all.css
  mix.styles(
    [
      './node_modules/slick-carousel/slick/slick.css',
      'resources/assets/css/app.css'
    ],
    'public/css/all.css'
  );
  // use mix.script to combine jquery + foundation + slick  -> public/js/all.js
  mix.scripts(
    [
      './node_modules/jquery/dist/jquery.min.js',
      './node_modules/foundation-sites/dist/js/foundation.min.js',
      './node_modules/slick-carousel/slick/slick.min.js',
      'resources/assets/js/*.js'
    ],
    'public/js/all.js'
  );
});
