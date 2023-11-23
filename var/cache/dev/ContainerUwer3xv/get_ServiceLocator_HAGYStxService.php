<?php

namespace ContainerUwer3xv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HAGYStxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hAGYStx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hAGYStx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'comment' => ['privates', 'App\\Entity\\Comment', 'getCommentService', true],
        ], [
            'comment' => 'App\\Entity\\Comment',
        ]);
    }
}