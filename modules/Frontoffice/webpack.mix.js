const mix = require('laravel-mix');

const appPublicPath = global.process.env.MIX_PUBLIC_PATH || 'public';

const appModule = global.process.env.MIX_PACKAGE;

mix.setPublicPath(`${appPublicPath}/modules/frontoffice`);

if (mix.inProduction()) {
    mix.version();
}

const tailwindcss = require('tailwindcss');

mix
    .js(__dirname + '/resources/assets/js/app.js', 'js/frontoffice.js')
    .postCss(__dirname + '/resources/assets/css/frontoffice.css', 'css/frontoffice.css',[
        tailwindcss( __dirname + '/tailwind.js'),
    ]);