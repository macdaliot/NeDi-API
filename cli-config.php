<?php

define ("NEDI_API_APPLICATION_ROOT", realpath(__DIR__."/"));

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__."/vendor/autoload.php";

$app = new \Silex\Application();
$app['debug'] = true;
$app->register(new \Nedi\Api\Data\DoctrineServiceProvider());
$app->boot();

return ConsoleRunner::createHelperSet($app['doctrine']);