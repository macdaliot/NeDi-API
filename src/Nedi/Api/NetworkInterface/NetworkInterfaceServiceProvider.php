<?php

namespace Nedi\Api\NetworkInterface;


use Silex\Application;
use Silex\ServiceProviderInterface;

class NetworkInterfaceServiceProvider implements ServiceProviderInterface {

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
        $app->get("/v1/interface/", "controller.interface:getAll")->bind("controller.interface:getAll");
        $app->get("/v1/interface/{device}/{index}", "controller.interface:get")->bind("controller.interface:get");
    }
}