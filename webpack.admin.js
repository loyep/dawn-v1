const webpack = require('webpack');
const mix = require('laravel-mix');
const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');

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

const config = {
  plugins: [
    new webpack.IgnorePlugin(/^\.\/locale$/, /moment$/),
    new CleanWebpackPlugin({ 
      cleanOnceBeforeBuildPatterns: path.resolve(__dirname + '/public/{static/admin/*,js/*.{js,map},css/*.{css,map},images}')
    })
  ],
  resolve: {
    // extensions: ['.js', '.vue', '.ts'],
    alias: {
      '@': path.resolve(__dirname, 'resources/admin')
    },
    modules: [
      // 'resources/admin',
      'node_modules'
    ]
  },
  module: {
    rules: [
      {
        test: /\.less$/,
        loader: 'less-loader',
        options: {
          javascriptEnabled: true
        },
      }
    ]
  },
  output: {
    chunkFilename: 'js/[name].[chunkhash].js',
    publicPath: '/static/admin/'
  }
}

mix.options({processCssUrls: false});

mix
  .setResourceRoot('/static/admin')
  .setPublicPath('public/static/admin')
  .ts('resources/admin/main.ts', 'public/static/admin/admin.js', {
    options: {
      javascriptEnabled: true
    }
  })
  .less('resources/admin/styles/index.less', 'public/static/admin/admin.css')
  // .less('resources/admin/styles/index.less', 'public/static/admin/admin.css', {
  //   options: {
  //     javascriptEnabled: true
  //   }
  // })
  .copyDirectory('resources/admin/themes', 'public/static/admin/themes')
  .version()

// mix
  // .less('resources/admin/styles/index.less', 'public/static/admin/admin.css')

if (mix.inProduction()) {
  mix.disableNotifications()
} else {
  mix.sourceMaps()
}

mix.webpackConfig(config)
