<?php

namespace Engine\Db;

use Engine\Service\AbstractService;
use Engine\Service\ServiceInterface;

class DbService extends AbstractService
{

    protected $connection;
    
    protected $config;

    protected function setConnection()
    {
        list($dsn, $user, $password, $attributes) = $this->config;
        $this->connection = new \PDO($dsn, $user, $password);
        foreach ($attributes as $aKey => $aVal) {
            $this->connection->setAttribute($aKey, $aKey);
        }
    }

    public function init(array $config)
    {
        $this->config = $config;
        $this->setConnection();
    }
}
