<?php

/**
 * Object_Cache class
 */
interface iObject_Cache
{

    static function is_supported();

    function add($key, $data, $expire = 0);

    function set($key, $data, $expire = 0);

    function get($key, &$found = null);

    function delete($key);

    function flush();

        function stats(); // return string

function _get_cache();

    function __destruct();
}