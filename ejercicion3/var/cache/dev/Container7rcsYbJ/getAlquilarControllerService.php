<?php

namespace Container7rcsYbJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAlquilarControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AlquilarController' shared autowired service.
     *
     * @return \App\Controller\AlquilarController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AlquilarController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/AlquilarService.php';

        $container->services['App\\Controller\\AlquilarController'] = $instance = new \App\Controller\AlquilarController(($container->privates['App\\Service\\AlquilarService'] ?? ($container->privates['App\\Service\\AlquilarService'] = new \App\Service\AlquilarService())));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\AlquilarController', $container));

        return $instance;
    }
}
