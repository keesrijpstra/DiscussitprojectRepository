<?php

namespace ContainerUwer3xv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RbSxyT2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rbSxyT2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rbSxyT2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'boardRepository' => ['privates', 'App\\Repository\\BoardRepository', 'getBoardRepositoryService', true],
            'repository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'boardRepository' => 'App\\Repository\\BoardRepository',
            'repository' => 'App\\Repository\\PostRepository',
            'slugger' => '?',
        ]);
    }
}
