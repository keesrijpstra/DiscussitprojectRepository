<?php

namespace ContainerSL5E3Mj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SpN9U5_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.spN9U5.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.spN9U5.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'userToUnfollow' => ['privates', 'App\\Entity\\User', 'getUserService', true],
        ], [
            'doctrine' => '?',
            'userToUnfollow' => 'App\\Entity\\User',
        ]);
    }
}
