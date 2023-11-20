<?php

namespace ContainerGOQwYsH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__USql3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..USql3_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..USql3_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'comment' => ['privates', '.errored..service_locator..USql3_.App\\Entity\\Comment', NULL, 'Cannot autowire service ".service_locator..USql3_": it needs an instance of "App\\Entity\\Comment" but this type has been excluded in "config/services.yaml".'],
            'repository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'comment' => 'App\\Entity\\Comment',
            'repository' => 'App\\Repository\\CommentRepository',
            'slugger' => '?',
        ]);
    }
}
