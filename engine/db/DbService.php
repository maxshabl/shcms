<?php

namespace Engine\Db;

use Engine\Service\AbstractService;
use Engine\Service\ServiceInterface;

class DbService extends AbstractService implements ServiceInterface
{

    public function init()
    {
        return $this;
    }


}