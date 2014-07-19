<?php

namespace Phake\Utils\Tests\Units\Process;

use Phake\Utils\Process\Process as P;

class Process extends \mageekguy\atoum\test
{
    public function testExec()
    {
        $this
            ->output(function () { P::exec('ls '.__DIR__); })
                ->contains('[EXEC] ls '.__DIR__)
                ->contains('OUT > Process.php')
            ->output(function () { P::exec('ls '.__DIR__, true, false); })
                ->isEmpty()
            ->exception(function () { P::exec('unknown_cmd', true, false); })
                ->isInstanceOf('\RuntimeException')
            ->integer(P::exec('unknown_cmd', false, false))
                ->isGreaterThanOrEqualTo(1)
            ->integer(P::exec('ls', false, false))
                ->isEqualTo(0)
        ;
    }

    public function testFunctions()
    {
        $this
            ->when(function () {
                cmd('ls', true, false);
            })
            ->error()
                ->notExists()
            ->integer(cmd('ls', true, false))
                ->isEqualTo(0)
        ;
    }
}
