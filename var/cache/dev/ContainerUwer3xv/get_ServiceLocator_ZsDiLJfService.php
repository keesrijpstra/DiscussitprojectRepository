<?php

namespace ContainerUwer3xv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZsDiLJfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZsDiLJf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZsDiLJf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'post' => ['privates', 'App\\Entity\\Post', 'getPostService', true],
            'repository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'post' => 'App\\Entity\\Post',
            'repository' => 'App\\Repository\\PostRepository',
        ]);
    }
}
