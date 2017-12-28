<?php

$di = new \Engine\DI();
$config = new \Engine\Config\Config(__DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'main.php');
$serviceCfg = $config->getServices();
foreach ($serviceCfg as $sKey => $sConfig) {
    $di->set();
}