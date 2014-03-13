<?php

namespace NediApi\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DeviceController {

    public function get(Request $request, Application $app) {
        return $app["twig"]->render("index.twig", array('token' => "test"));
    }

    public function getById($id) {
        return "TEST $id";
    }

}