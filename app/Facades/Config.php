<?php

namespace Thor\Facades;

use Mjolnir\Abstracts\AbstractFacade;
use Thor\App;

/**
 *@method static get(string $identifier)
 */
class Config extends AbstractFacade
{
    protected static $app = App::class;
    protected static $accessor = 'configAccessor';
}