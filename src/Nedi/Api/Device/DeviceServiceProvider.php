<?php

namespace Nedi\Api\Device;

use Doctrine\ORM\EntityManager;
use Nedi\Api\Repository\DeviceRepository;
use Silex\Application;
use Silex\ServiceProviderInterface;

class DeviceServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Application $app An Application instance
     */
    public function register(Application $app)
    {
        $app['repository.device'] = $app->share(
            function () use ($app) {

                /** @var EntityManager $doctrine */
                $doctrine = $app['doctrine'];

                /** @var DeviceRepository $repository */
                $repository = $doctrine->getRepository('Nedi\Api\Entity\Device');
                return $repository;
            }
        );

        $app['controller.device'] = $app->share(
            function () use ($app) {
                return new DeviceController($app['repository.device'], $app['url_generator']);
            }
        );
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {
        $app->mount("/device", new DeviceControllerProvider());
    }
}