<?php

define ("NEDI_API_APPLICATION_ROOT", realpath(__DIR__."/.."));

require_once NEDI_API_APPLICATION_ROOT."/vendor/autoload.php";

$app = new \Silex\Application();
$app->get("/", function() {
        return "It works!";
    });
$app->run();
