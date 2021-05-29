<?php

return [
    'path' => [
        'base' => dirname(__DIR__),
        'assets' => dirname(__DIR__) . "/assets"
    ],

    'uri' => [
        'base' => plugin_dir_url(__DIR__),
        'assets' => plugin_dir_url(__DIR__) . "assets"
    ],

    'view' => [
        'folder' => "templates",
        'templatePath' => plugin_dir_path(__DIR__) . 'resources/views',
        'compiledPath' => wp_upload_dir()['basedir'] . '/cache/views'
    ],

    'blocks' => [
        'folder' => "blocks",
        'useSSR' => true,
    ],

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