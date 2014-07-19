<?php

namespace Phake\Utils\Process;

use Symfony\Component\Process\Process as sfProcess;

/**
 * All process helpers
 */
class Process
{
    /**
     * Execute a sub process
     *
     * @param string $command
     * @param boolean $output
     * @param boolean $failOnerror
     * @throws \RuntimeException If the subprocess fails
     *
     * @return integer The exit code of the command
     */
    public static function exec($command, $output = true, $failOnError = true)
    {
        if ($output) {
            printf("[EXEC] %s\n", $command);

            $callback = function ($type, $buffer) {
                if (sfProcess::ERR === $type) {
                    printf("ERR > %s\n", $buffer);
                } else {
                    printf("OUT > %s\n", $buffer);
                }
            };
        }

        $process = new sfProcess($command);
        $process->run(isset($callback) ? $callback : null);

        if (!$process->isSuccessful() && $failOnError) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        return $process->getExitCode();
    }
}
