<?php

namespace Core;

use Core\Service\ServiceInterface;

/**
 * Class DI
 * @package Engine
 */
class DI
{
    private static $container = array();

    public static function set(string $key, ServiceInterface $value)
    {
        if (!isset(self::$container[$key])) {
            self::$container[$key] = $value;
        } else {
            trigger_error('Variable ' . $key . ' already defined', E_USER_WARNING);
        }
    }

    public static function get(string $key) : ServiceInterface
    {
        return self::$container[$key];
    }

}
