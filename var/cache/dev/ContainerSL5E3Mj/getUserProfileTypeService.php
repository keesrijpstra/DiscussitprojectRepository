<?php

namespace ContainerSL5E3Mj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserProfileTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UserProfileType' shared autowired service.
     *
     * @return \App\Form\UserProfileType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserProfileType.php';

        return $container->privates['App\\Form\\UserProfileType'] = new \App\Form\UserProfileType();
    }
}
