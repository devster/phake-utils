<?php

namespace Phake\Utils\Filesystem;

use Symfony\Component\Filesystem\Filesystem as FS;

/**
 * All filesystem helpers
 */
class Filesystem
{
    protected static $fs;

    public static function __callStatic($method, $args)
    {
        if (is_null(self::$fs)) {
            self::$fs = new FS;
        }

        return call_user_func_array(array(self::$fs, $method), $args);
    }
}
