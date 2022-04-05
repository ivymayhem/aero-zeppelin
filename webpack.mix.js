const mix = require('laravel-mix');

mix.js('resources/js/web.js', 'public/js');

mix.postCss('resources/css/web.css', 'public/css', [
    require('tailwindcss'),
]).version();