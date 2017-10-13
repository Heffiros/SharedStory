var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scriptsIn('resources/js/', 'public/js/main.min.js');
    mix.scriptsIn('resources/css/', 'public/css/sharedstory.css');
});