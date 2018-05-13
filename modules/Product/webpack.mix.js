const mix = require('laravel-mix');

const appPublicPath = global.process.env.MIX_PUBLIC_PATH || 'public';

const appModule = global.process.env.MIX_PACKAGE;

mix.setPublicPath(`${appPublicPath}/modules/product`);

if (mix.inProduction()) {
    mix.version();
}

mix
    .js(__dirname + '/resources/assets/js/app.js', 'js/product.js')
    .sass( __dirname + '/resources/assets/sass/app.scss', 'css/product.css');