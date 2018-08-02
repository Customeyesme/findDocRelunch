let mix = require('laravel-mix');
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig( {
    plugins: [
        new ImageminPlugin( {
            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '95-100'
            },
            test: /\.(jpe?g|png|gif|svg)$/i
        } )
    ]
});

//Images & media. @TODO Clean when app ready for production.
mix.copy( 'resources/assets/client/images', 'public/client/images', false );

//Client (Landing Page and Doctor Registration) Assets
mix.js('resources/assets/client/js/app.js', 'public/client/js')
    .sass('resources/assets/client/sass/app.scss', 'public/client/css');

mix.js('resources/assets/client/js/register.js', 'public/client/js')
    .sass('resources/assets/client/sass/register.scss', 'public/client/css');

//Admin Panel Assets
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


