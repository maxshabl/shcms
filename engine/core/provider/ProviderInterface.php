<?php

namespace Core\Provider;

use Core\Service\ServiceInterface;

/**
 * Interface ProviderInterface
 * @package Core\Provider
 */
interface ProviderInterface
{
    /**
     * @param string $serviceName
     * @param ServiceInterface $service
     * @return ServiceInterface
     */
    public function setService(string $serviceName, ServiceInterface $service): ServiceInterface;

    /**
     * @param string $serviceName
     * @return ServiceInterface
     */
    public function getService(string $serviceName): ServiceInterface;

    /**
     * @return array
     */
    public function getServices(): array;
}
