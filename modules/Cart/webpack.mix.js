const mix = require('laravel-mix');

const appPublicPath = global.process.env.MIX_PUBLIC_PATH || 'public';

const appModule = global.process.env.MIX_PACKAGE;

mix.setPublicPath(`${appPublicPath}/modules/cart`);

if (mix.inProduction()) {
    mix.version();
}

mix
    .js(__dirname + '/resources/assets/js/app.js', 'js/cart.js')
    .sass( __dirname + '/resources/assets/sass/app.scss', 'css/cart.css');