<?php

namespace Phake\Utils\Tests\Units\Test;

use Phake\Utils\Test\Test as T;

class Test extends \mageekguy\atoum\test
{
    public function testTest()
    {
        $this
            ->variable(T::test(true, 'error message'))
                ->isNull()
            ->exception(function () {
                T::test(false, 'error message');
            })
                ->message
                    ->contains('error message')
        ;
    }

    public function testError()
    {
        $this
            ->exception(function () {
                T::error('error message');
            })
                ->message
                    ->contains('error message')
        ;
    }

    public function testFunctions()
    {
        $this
            ->boolean(function_exists('test'))
                ->isTrue()
            ->boolean(function_exists('error'))
                ->isTrue()
        ;
    }
}
