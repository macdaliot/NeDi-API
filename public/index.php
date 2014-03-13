<?php

use NediApi\Controller\DeviceController;

define ("NEDI_API_APPLICATION_ROOT", realpath(__DIR__."/.."));

require_once NEDI_API_APPLICATION_ROOT."/vendor/autoload.php";

$app = new \Silex\Application();
$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(
    new \Silex\Provider\TwigServiceProvider(),
    array(
        'twig.path' => NEDI_API_APPLICATION_ROOT . '/src/Views',
        'twig.options' => array('cache' => NEDI_API_APPLICATION_ROOT . '/data/twig'),
    )
);

$app['debug'] = true;

$app->register(
    new \Silex\Provider\MonologServiceProvider(),
    array(
        'monolog.logfile' => NEDI_API_APPLICATION_ROOT . "/data/application.log"
    )
);

$app['controller.device'] = $app->share(function() { return new DeviceController(); });


$app->get("/", function() {
        return "It works!";
    });

$app->get("/device", "controller.device:get");
$app->get("/device/{id}", "controller.device:getById");

$app->run();
