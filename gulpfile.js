var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scriptsIn('resources/js/', 'public/js/app.min.js');
});