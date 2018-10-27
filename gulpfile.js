var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scriptsIn('resources/js/', 'public/js/main.min.js');
    //mix.styles('resources/css/*', 'public/css/sharedstory.css');
    mix.styles([
        'story.css',
    ], 'public/css/sharedstory.css');
});