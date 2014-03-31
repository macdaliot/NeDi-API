<?php

namespace Nedi\Api\Device;


use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

class DeviceControllerProvider implements ControllerProviderInterface {

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        /** @var ControllerCollection $controller */
        $controller = $app['controllers_factory'];
        $controller->get("/", "controller.device:getAll")->bind("controller.device:getAll");
        $controller->get("/{device}", "controller.device:get")->bind("controller.device:get");
        $controller->delete("/{device}", "controller.device:delete")->bind("controller.device:delete");
        $controller->get("/{device}/interfaces", "controller.device:getInterfaces")->bind("controller.device:getInterfaces");
        $controller->get("/{device}/modules", "controller.device:getModules")->bind("controller.device:getModules");
        $controller->get("/{device}/events", "controller.device:getEvents")->bind("controller.device:getEvents");
        $controller->get("/{device}/links", "controller.device:getLinks")->bind("controller.device:getLinks");
        $controller->get("/{device}/nodes", "controller.device:getNodes")->bind("controller.device:getNodes");
        $controller->get("/{device}/topology", "controller.device:getTopology")->bind("controller.device:getTopology");
        $controller->post("/{device}/discover", "controller.device:discover")->bind("controller.device:discover");

        return $controller;
    }
}