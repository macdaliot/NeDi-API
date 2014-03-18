<?php

namespace Nedi\Api\Data;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Silex\Application;
use Silex\ServiceProviderInterface;

class DoctrineServiceProvider implements ServiceProviderInterface
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
        $app['doctrine.paths'] = $app->share(
            function () {
                return array('Nedi\Api\Entity' => NEDI_API_APPLICATION_ROOT . "/src/Nedi/Api/Entity");
            }
        );
        $app['doctrine.configuration'] = $app->share(
            function () use ($app) {
                return Setup::createAnnotationMetadataConfiguration(
                    $app['doctrine.paths'],
                    $app['debug'],
                    NEDI_API_APPLICATION_ROOT."/data/doctrine"
                );
            }
        );

        $app['doctrine.connection'] = $app->share(
            function () use ($app) {
                return array(
                    'driver'   => 'pdo_mysql',
                    'host'     => '127.0.0.1',
                    'dbname'   => 'nedi',
                    'user'     => 'nedi',
                    'password' => 'dbpa55'
                );
            }
        );

        $app['doctrine'] = $app->share(
            function () use ($app) {
                return EntityManager::create($app['doctrine.connection'], $app['doctrine.configuration']);
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
    }
}