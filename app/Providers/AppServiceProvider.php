<?php

namespace Thor\Providers;

use Mjolnir\Abstracts\AbstractServiceProvider;
use Mjolnir\Abstracts\AbstractApp;
use Thor\Facades\Config;
use Thor\Setup\Enqueues;

class AppServiceProvider extends AbstractServiceProvider
{

    /** @var AbstractApp */
    protected $container;

    protected $provides = [
        Enqueues::class
    ];

    public function register()
    {
        $this->container->add(Enqueues::class)
            ->addArguments(['uri' => Config::get('app.uri.assets'), 'path' => Config::get('app.path.assets')]);
    }
}