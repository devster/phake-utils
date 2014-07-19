<?php

$autoload = __DIR__.'/../../vendor/autoload.php';

if (file_exists($autoload)) {
    require_once $autoload;
} else {
    require_once __DIR__.'/src/Filesystem/Filesystem.php';
}

require_once __DIR__.'/src/Filesystem/functions.php';
