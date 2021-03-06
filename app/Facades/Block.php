<?php

namespace Thor\Facades;

use Mjolnir\Abstracts\AbstractFacade;
use Mjolnir\Gutenberg\Group;
use Thor\App;

/**
 * @method static add(string $namespace, string $name, string $path = null): self
 * @method static register($name, array $args = [])
 * @method static unregister($name)
 * @method static registerFromMetadata($resource, array $args = [])
 * @method static exists(string $blockName, $post = null)
 * @method static render(array $parsedBlock)
 * @method static parse(string $content)
 */
class Block extends AbstractFacade
{
    protected static $app = App::class;
    protected static $accessor = 'block';

    public static function group(string $namespace): Group
    {
        return static::resolveInstance(static::$accessor)
            ->group($namespace);
    }
}