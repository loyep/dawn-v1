const mix = require('laravel-mix')
const path = require('path')
const { env } = require('yargs').argv

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

if (env && env.admin) {
  return require(path.resolve(__dirname, 'webpack.admin.js'))
}

mix
  .setResourceRoot('/static/app')
  .setPublicPath('public/static/app')
  .js('resources/js/app.js', 'public/static/app/js')
  .less('resources/less/app.less', 'public/static/app/css')
