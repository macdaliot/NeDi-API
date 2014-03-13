<?php

namespace NediApi\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DeviceController
{

    public function get(Request $request, Application $app)
    {

        return $this->getTwig($app)->render("index.twig", array('token' => "test"));
    }

    public function getById($id)
    {
        return "TEST $id";
    }

    /**
     * @param Application $app
     * @return \Twig_Environment
     */
    private function getTwig(Application $app)
    {
        return $app["twig"];
    }

}