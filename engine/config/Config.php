<?php

namespace Engine\Config;

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
    private $indexPath;

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
    public function getIndexPath() : string
    {
        return $this->indexPath;
    }

    /**
     * @return string
     */
    public function getBasePath() : string
    {
        return $this->basePath;
    }


    /**
     * @return string
     */
    public function getLayout() : string
    {
        return $this->layout;
    }



    /**
     * @return array
     */
    public function getServices() : array
    {
        return $this->services;
    }


    /**
     * Config constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->services = $config['serviceInstances'];
        $this->layout = $config['layout'];
        $this->basePath = $config['basePath'];
        $this->indexPath = $config['indexPath'];
    }
}
