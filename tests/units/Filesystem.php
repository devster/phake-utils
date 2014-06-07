<?php

namespace Phake\Utils\Tests\Units;

use Phake\Utils\Filesystem as FS;

class Filesystem extends \mageekguy\atoum\test
{
    public function testCallStatic()
    {
        $this
            ->when(function() {
                FS::exists('test');
            })
            ->error()
                ->notExists()
            ->when(function () {
                FS::unknownMethod();
            })
            ->error()
                ->exists()
        ;
    }

    public function testFunctions()
    {
        $this
            ->when(function () {
                fs_exists('test');
            })
            ->error()
                ->notExists()
            ->boolean(fs_exists(__FILE__))
                ->isTrue()
            ->boolean(fs_exists(__DIR__.'/unknown_file'))
                ->isFalse()
        ;
    }
}
