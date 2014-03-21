<?php

namespace Nedi\Api\Device;


use Doctrine\ORM\EntityManager;
use Nedi\Api\Repository\DeviceRepository;
use Silex\Application;
use Silex\ServiceProviderInterface;

class DeviceServiceProvider implements ServiceProviderInterface {

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
        $app['repository.device'] = $app->share(function() use ($app) {

                /** @var EntityManager $doctrine */
                $doctrine = $app['doctrine'];

                /** @var DeviceRepository $repository */
                $repository = $doctrine->getRepository('Nedi\Api\Entity\Device');
                return $repository;
            });

        $app['controller.device'] = $app->share(function() use ($app) {
                return new DeviceController($app['repository.device'], $app['url_generator']);
            });
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
        $app->get("/v1/device/", "controller.device:getAll")->bind("controller.device:getAll");
        $app->get("/v1/device/{device}", "controller.device:get")->bind("controller.device:get");
        $app->delete("/v1/device/{device}", "controller.device:delete")->bind("controller.device:delete");
        $app->get("/v1/device/{device}/interfaces", "controller.device:getInterfaces")->bind("controller.device:getInterfaces");
        $app->get("/v1/device/{device}/modules", "controller.device:getModules")->bind("controller.device:getModules");
        $app->get("/v1/device/{device}/events", "controller.device:getEvents")->bind("controller.device:getEvents");
        $app->get("/v1/device/{device}/links", "controller.device:getLinks")->bind("controller.device:getLinks");
        $app->get("/v1/device/{device}/nodes", "controller.device:getNodes")->bind("controller.device:getNodes");
        $app->get("/v1/device/{device}/topology", "controller.device:getTopology")->bind("controller.device:getTopology");
        $app->post("/v1/device/{device}/discover", "controller.device:discover")->bind("controller.device:discover");
    }
}