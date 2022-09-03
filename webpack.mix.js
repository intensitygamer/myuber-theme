// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist')


let mix = require('laravel-mix');

mix.sass('src/app.scss', 'dist');
