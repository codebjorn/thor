<?php
/*
|--------------------------------------------------------------------------
| Main configuration file
|--------------------------------------------------------------------------
*/
return [
    /*
    |--------------------------------------------------------------------------
    | App paths
    |--------------------------------------------------------------------------
    */
    'path' => [
        'base' => dirname(__DIR__),
        'assets' => dirname(__DIR__) . "/assets"
    ],

    /*
    |--------------------------------------------------------------------------
    | App urls
    |--------------------------------------------------------------------------
    */
    'uri' => [
        'base' => plugin_dir_url(__DIR__),
        'assets' => plugin_dir_url(__DIR__) . "assets"
    ],

    /*
    |--------------------------------------------------------------------------
    | Template engine configurations
    |--------------------------------------------------------------------------
    */
    'view' => [
        'templatePath' => plugin_dir_path(__DIR__) . 'resources/views',
        'compiledPath' => wp_upload_dir()['basedir'] . '/cache/views'
    ],

    /*
    |--------------------------------------------------------------------------
    | Gutenberg blocks configurations
    |--------------------------------------------------------------------------
    */
    'blocks' => [
        'folder' => "blocks",
        'useSSR' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Providers
    |--------------------------------------------------------------------------
    */
    'providers' => [
        //Base Providers
        \Mjolnir\Providers\ExceptionServiceProvider::class,
        \Mjolnir\Providers\HooksServiceProvider::class,
        \Mjolnir\Providers\ViewServiceProvider::class,
        \Mjolnir\Providers\GutenbergServiceProvider::class,

        //App Providers
        \Thor\Providers\AppServiceProvider::class
    ]
];