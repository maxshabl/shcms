<?php

namespace Engine\Service;

use Engine\DI;

abstract class AbstractService
{
    private $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }
}