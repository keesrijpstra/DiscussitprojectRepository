<?php

namespace ContainerSL5E3Mj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBoardService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Board' shared autowired service.
     *
     * @return \App\Entity\Board
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/Board.php';

        return $container->privates['App\\Entity\\Board'] = new \App\Entity\Board();
    }
}
