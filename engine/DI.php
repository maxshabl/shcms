<?php

namespace Engine;

use Engine\Service\ServiceInterface;

/**
 * Class DI
 * @package Engine
 */
class DI
{
    /**
     * @var
     */
    private $container;

    /**
     * @param string $name
     * @param ServiceInterface $value
     */
    public function set(string $name, ServiceInterface $value)
    {
        $this->container[$name] = $value;
    }

    /**
     * @param string $name
     * @return ServiceInterface
     */
    public function get(string $name) : ServiceInterface
    {
        return $this->container[$name];
    }
}
