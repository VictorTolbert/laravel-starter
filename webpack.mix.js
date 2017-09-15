const mix = require('laravel-mix')
const path = require('path')

mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve('resources/assets/js')
        }
    }
})

// mix.config.postCss = require("./postcss.config").plugins; TODO: Test this when I need to customize PostCSS
mix.config.postCss = [
    require('postcss-easy-import')(),
    require('postcss-slds-prefix')('vui'),
    require('postcss-cssnext')({
        features: {
            // Mix takes care of this for us.
            autoprefixer: false
        }
    })
]

// mix.config.uglify.compress.drop_console = false;

mix
    .js('resources/assets/js/docs.js', 'public/js')
    .js('resources/assets/js/app.js', 'public/js')
    .postCss('resources/assets/css/docs.css', 'public/css')
    .sass('resources/assets/sass/app.scss', 'public/css')
