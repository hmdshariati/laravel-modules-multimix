const mix = require('laravel-mix');

const appPublicPath = global.process.env.MIX_PUBLIC_PATH;

const appModule = global.process.env.MIX_PACKAGE;

mix.setPublicPath(`${appPublicPath}/modules/${appModule}/`);

mix
    .js(__dirname + '/Resources/assets/js/app.js', 'js/cart.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/cart.css');

if (mix.inProduction()) {
    mix.version();
}