<?php

function _test_internal_call($name, $args) {
    return call_user_func_array('Phake\Utils\Test\Test::'.$name, $args);
}

function test() {
    return _test_internal_call('test', func_get_args());
}

function error() {
    return _test_internal_call('error', func_get_args());
}
