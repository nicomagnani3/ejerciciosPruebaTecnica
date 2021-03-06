<?php

namespace Container7rcsYbJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBiciControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BiciController' shared autowired service.
     *
     * @return \App\Controller\BiciController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BiciController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/BicicletaService.php';

        $container->services['App\\Controller\\BiciController'] = $instance = new \App\Controller\BiciController(new \App\Service\BicicletaService());

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\BiciController', $container));

        return $instance;
    }
}
