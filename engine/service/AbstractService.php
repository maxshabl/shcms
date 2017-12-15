<?php

namespace Engine\Service;

use Engine\DI;

abstract class AbstractService implements ServiceInterface
{
    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }
}