'use strict';

// webpack.config.js
const Encore = require('@symfony/webpack-encore');
const webpack = require('webpack')

Encore
    // the project directory where all compiled assets will be stored
    .setOutputPath('build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('../')
    .setManifestKeyPrefix('build')
    .configureManifestPlugin((options) => {
        //
        options.publicPath = 'build/'
    })

    // will create build/app.js and build/app.css
    .addEntry('js/app', './assets/js/app.js')
    .addStyleEntry('css/app', './assets/sass/app.scss')

    // enable source maps during development
    .enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    .enableBuildNotifications()

    // create hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // allow sass/scss files to be processed
    .enableSassLoader(function(sassOptions) {

    }, { resolveUrlLoader: false })

    // enabled postcss
    .enablePostCssLoader()

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    // because jQuery is already provided by WordPress
    .addPlugin(new webpack.ProvidePlugin({
        "$": "jquery",
        "jQuery": "jquery",
        "window.jQuery": "jquery"
    }))
;

// export the final configuration
module.exports = Encore.getWebpackConfig();
