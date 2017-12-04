<?php

namespace Core\Config;

class Config
{

    public function getConfig($key)
    {
        $configs = BASE_PATH . DIRECTORY_SEPARATOR . 'config' .DIRECTORY_SEPARATOR.'main.php';
        return (object)$configs[$key];
    }
}
