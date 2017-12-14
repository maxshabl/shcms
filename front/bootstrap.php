<?php
$config =  (object)(__DIR__.DIRECTORY_SEPARATOR. 'config' .DIRECTORY_SEPARATOR. 'main.php');
foreach ($config->services as $providerKey => $providerConfig) {
    $classProvider =  '\Core\\'.$providerKey;
    (new $classProvider($providerConfig))->init();
}
