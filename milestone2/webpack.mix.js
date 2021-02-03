// webpack.mix.js
let mix = require('laravel-mix');

mix.sass('src/style.scss', 'dist')
.js('src/main.js', 'dist').vue({ version: 2 });
