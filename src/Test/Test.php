<?php

namespace Phake\Utils\Test;

/**
 * All test helpers
 */
class Test
{
    /**
     * Test a condition, if false, throw an exception
     *
     * @param boolean $boolean
     * @param string $message
     */
    public static function test($boolean, $message = null)
    {
        if (!$boolean) {
            self::error($message);
        }
    }

    /**
     * Throws an exception
     *
     * @param string $message
     */
    public static function error($message)
    {
        throw new \Exception($message);
    }
}
