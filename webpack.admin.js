const webpack = require('webpack');
const mix = require('laravel-mix');
const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const { admin } = require('yargs').argv.env

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


// mix.setResourceRoot('/static/admin');

    mix
        // .setPublicPath('public/static/styles')
        .less('resources/admin/styles/index.less', 'public/static/admin.css')
        .copyDirectory('resources/admin/themes', 'public/static/themes');
    mix
        // .setPublicPath('public/static/admin')
        .js('resources/admin/main.js', 'public/static/admin.js');

mix.version();

if (mix.inProduction()) {
    mix.disableNotifications();
} else {
    mix.sourceMaps();
}

const config = {
    plugins: [
        new webpack.IgnorePlugin(/^\.\/locale$/, /moment$/),
    ],
    resolve: {
        extensions: ['.ts', '.tsx'],
        alias: {
            '@': path.resolve(__dirname, 'resources/admin')
        },
    },
    module: {
        rules: [{
                test: /\.tsx?$/,
                loader: 'ts-loader',
                options: {
                    appendTsSuffixTo: [/\.vue$/],
                },
                exclude: '/resources/admin/styles',
            },
            {
                test: /\.less$/,
                loader: 'less-loader', // compiles Less to CSS
                options: {
                    javascriptEnabled: true
                },
            },
        ]
    },
    output: {
        chunkFilename: `chunk/[name].${ mix.inProduction() ? '[chunkhash].' : '' }js`,
        // publicPath: '/static/admin/'
    }
}

mix.webpackConfig(config);
