<?php

namespace Engine\Config;

use Engine\Service\ServiceInterface;

/**
 * Class ConfigService
 * @package Engine\Config
 */
class Config
{
    /**
     * @var
     */
    private $services;

    /**
     * @var
     */
    private $pathIndex;

    /**
     * @var
     */
    private $basePath;

    /**
     * @var
     */
    private $layout;


    /**
     * @return string
     */
    public function getPathIndex() : string
    {
        return $this->pathIndex;
    }


    /**
     * @param string $pathIndex
     */
    public function setPathIndex(string $pathIndex)
    {
        $this->pathIndex = $pathIndex;
    }


    /**
     * @return string
     */
    public function getBasePath() : string
    {
        return $this->basePath;
    }


    /**
     * @param string $basePath
     */
    public function setBasePath(string $basePath)
    {
        $this->basePath = $basePath;
    }


    /**
     * @return string
     */
    public function getLayout() : string
    {
        return $this->layout;
    }


    /**
     * @param string $layout
     */
    public function setLayout(string $layout)
    {
        $this->layout = $layout;
    }


    /**
     * @return array
     */
    public function getServices() : array
    {
        return $this->services;
    }


    /**
     * @param string $name
     * @param array $service
     */
    public function setServices(string $name, array $service)
    {
        $this->services[$name] = $service;
    }

    public function extract()
    {}
    
    /**
     * @return $this
     */
    public function init()
    {
        return $this;
    }
}
