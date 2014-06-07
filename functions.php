<?php

// Filesystem
function _fs_internal_call($name, $args) {
    return call_user_func_array('Phake\Utils\Filesystem::'.$name, $args);
}

function fs_copy() {
    return _fs_internal_call('copy', func_get_args());
}

function fs_mkdir() {
    return _fs_internal_call('mkdir', func_get_args());
}

function fs_exists() {
    return _fs_internal_call('exists', func_get_args());
}

function fs_touch() {
    return _fs_internal_call('touch', func_get_args());
}

function fs_remove() {
    return _fs_internal_call('remove', func_get_args());
}

function fs_chmod() {
    return _fs_internal_call('chmod', func_get_args());
}

function fs_chown() {
    return _fs_internal_call('chown', func_get_args());
}

function fs_chgrp() {
    return _fs_internal_call('chgrp', func_get_args());
}

function fs_rename() {
    return _fs_internal_call('rename', func_get_args());
}

function fs_symlink() {
    return _fs_internal_call('symlink', func_get_args());
}

function fs_make_path_relative() {
    return _fs_internal_call('makePathRelative', func_get_args());
}

function fs_mirror() {
    return _fs_internal_call('mirror', func_get_args());
}

function fs_is_absolute_path() {
    return _fs_internal_call('isAbsolutePath', func_get_args());
}

function fs_dump_file() {
    return _fs_internal_call('dumpFile', func_get_args());
}
