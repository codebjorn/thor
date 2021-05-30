let mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Update mix webpack config with external libraries
|--------------------------------------------------------------------------
*/
mix.webpackConfig({
    externals: {
        react: 'React',
        'react-dom': 'ReactDOM',
        tinymce: 'tinymce',
        jquery: 'jQuery',
        moment: 'moment',
        lodash: 'lodash',
        'lodash-es': 'lodash',

        // Gutenberg Components
        '@wordpress/blocks': 'wp.blocks',
        '@wordpress/block-editor': 'wp.blockEditor',
        '@wordpress/components': 'wp.components',
        '@wordpress/compose': 'wp.compose',
        '@wordpress/data': 'wp.data',
        '@wordpress/editor': 'wp.editor',
        '@wordpress/element': 'wp.element',
        '@wordpress/hooks': 'wp.hooks',
        '@wordpress/i18n': 'wp.i18n',
        '@wordpress/plugins': 'wp.plugins'
    }
})

/*
|--------------------------------------------------------------------------
| Add WordPress babel preset
|--------------------------------------------------------------------------
*/
mix.babelConfig({
    presets: ['@wordpress/babel-preset-default'],
});

/*
|--------------------------------------------------------------------------
| Set path for all assets
|--------------------------------------------------------------------------
*/
mix.setPublicPath('assets');

/*
|--------------------------------------------------------------------------
| Compile js files
|--------------------------------------------------------------------------
*/
mix.js('blocks/blocks.js', 'assets').react();
mix.js('resources/js/app.js', 'assets');

/*
|--------------------------------------------------------------------------
| Compile scss files
|--------------------------------------------------------------------------
*/
mix.sass('resources/scss/app.scss', 'assets');