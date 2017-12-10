<?php

namespace Core\Provider;

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
        $this->services[$serviceName] = $service;
        return $this->services[$serviceName];
    }

    /**
     * @param string $serviceName
     * @return ServiceInterface
     */
    public function getService(string $serviceName): ServiceInterface
    {
        return $this->services[$serviceName];
    }

    /**
     * @return array
     */
    public function getServices(): array
    {
        return $this->services;
    }
}
