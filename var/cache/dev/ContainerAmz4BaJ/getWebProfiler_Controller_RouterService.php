<?php

namespace ContainerAmz4BaJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebProfiler_Controller_RouterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/RouterController.php';

        return $container->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($container->services['.container.private.profiler'] ?? self::get_Container_Private_ProfilerService($container)), ($container->privates['twig'] ?? self::getTwigService($container)), ($container->services['router'] ?? self::getRouterService($container)), NULL, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['router.expression_language_provider'] ?? self::getRouter_ExpressionLanguageProviderService($container));
        }, 1));
    }
}
