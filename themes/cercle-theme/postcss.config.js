'use strict';

module.exports = {
    plugins: {
        // include whatever plugins you want
        // but make sure you install these via yarn or npm!

        // Fixes known Browser Bugs.
        // @see https://github.com/mattdimu/postcss-fixes
        'postcss-fixes': {},

        // Adds vendor prefixes for you, using data from Can I Use.
        // @see https://github.com/postcss/autoprefixer
        // add browserslist config to package.json (see below)
        'autoprefixer': {},

        // Joins matching CSS media queries into a single statement.
        // @see https://github.com/hail2u/node-css-mqpacker
        'css-mqpacker': {
            sort: true
        },

        // @todo: only on production
        // Plugin pack that optimizes CSS size for use in production.
        // @see https://github.com/ben-eb/cssnano
        /*
        cssnano: {
            'safe': true, // I would recommend using cssnano only in safe mode
            'calc': false, // calc is no longer necessary, as it is already done by postcss-fixes due to precision rounding reasons
            'autoprefixer': false // Autoprefixer it is already done by autoprefixer plugin
        }
        */

    }
}
