<?php

namespace Core\Provider;

use Core\DI;
use Core\Service\ServiceInterface;

/**
 * Class AbstractProvider
 * @package Core\Provider
 */
abstract class AbstractProvider implements ProviderInterface
{
    /**
     * @var
     */
    private $services;

    /**
     * AbstractProvider constructor.
     * @param \Stdclass $config
     */
    public function __construct(\Stdclass $config)
    {
        if (isset($config->services)) {
            foreach ($config->services as $providerKey => $provider) {
                foreach ($provider as $serviceKey => $service) {
                    $serviceClass = 'Core\\' . ucfirst($providerKey) . '\\' . ucfirst($serviceKey) . 'Service';
                    $this->setService($service->name, new $serviceClass($service));
                }
            }
        }
    }

    /**
     * @param string $serviceName
     * @param ServiceInterface $service
     * @return ServiceInterface
     */
    public function setService(string $serviceName, ServiceInterface $service): ServiceInterface
    {
        $di = new DI();
        $di->set($serviceName, $service);
        return $this->services[$serviceName];
    }

}
