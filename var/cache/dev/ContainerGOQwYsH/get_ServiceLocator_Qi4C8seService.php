<?php

namespace ContainerGOQwYsH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qi4C8seService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qi4C8se' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qi4C8se'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'post' => ['privates', '.errored..service_locator.qi4C8se.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.qi4C8se": it needs an instance of "App\\Entity\\Post" but this type has been excluded in "config/services.yaml".'],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'post' => 'App\\Entity\\Post',
            'slugger' => '?',
        ]);
    }
}
