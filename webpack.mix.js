const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | bootstrap, font-awesome
 |--------------------------------------------------------------------------
 */

mix.styles('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');
mix.styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
mix.copy('node_modules/bootstrap/dist/fonts', 'public/fonts');
mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
mix.copy('node_modules/ionicons/fonts', 'public/fonts');
mix.copy('node_modules/et-line/fonts', 'public/fonts');
mix.copy('resources/assets/images', 'public/images');

mix.styles('resources/assets/css/style.css', 'public/css/style.min.css');
mix.styles('resources/assets/css/plugin.css', 'public/css/plugin.min.css');


mix.scripts('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.scripts('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.scripts('resources/assets/js/plugin.js', 'public/js/plugin.min.js');
mix.scripts('resources/assets/js/main.js', 'public/js/main.min.js');
mix.scripts('resources/assets/js/custom-mixitup.js', 'public/js/custom-mixitup.min.js');




