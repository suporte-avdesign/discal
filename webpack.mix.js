const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Plugins:
 | 1- Leaflet: Interactive maps
 |--------------------------------------------------------------------------
 */
mix.styles('node_modules/leaflet/dist/leaflet.css', 'public/plugins/leaflet/leaflet.min.css');
mix.scripts('node_modules/leaflet/dist/leaflet.js', 'public/plugins/leaflet/leaflet.min.js');
mix.copy('node_modules/leaflet/dist/images', 'public/plugins/leaflet/images');


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
mix.styles('resources/assets/css/pricing.css', 'public/css/pricing.min.css');


mix.scripts('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.scripts('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.scripts('resources/assets/js/plugin.js', 'public/js/plugin.min.js');
mix.scripts('resources/assets/js/main.js', 'public/js/main.min.js');
mix.scripts('resources/assets/js/custom-mixitup.js', 'public/js/custom-mixitup.min.js');
mix.scripts('resources/assets/js/custom-map.js', 'public/js/custom-map.min.js');
mix.scripts('resources/assets/js/custom-video.js', 'public/js/custom-video.min.js');
mix.scripts('resources/assets/js/custom-whatsapp.js', 'public/js/custom-whatsapp.min.js');




