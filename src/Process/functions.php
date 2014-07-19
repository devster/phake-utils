<?php

/**
 * @param string $name
 */
function _process_internal_call($name, $args) {
    return call_user_func_array('Phake\Utils\Process\Process::'.$name, $args);
}

function cmd() {
    return _process_internal_call('exec', func_get_args());
}
