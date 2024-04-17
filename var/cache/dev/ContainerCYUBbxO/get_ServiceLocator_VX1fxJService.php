<?php

namespace ContainerCYUBbxO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VX1fxJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vX_1fxJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vX_1fxJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'recipe' => ['privates', '.errored..service_locator.vX_1fxJ.App\\Entity\\Recipe', NULL, 'Cannot autowire service ".service_locator.vX_1fxJ": it references class "App\\Entity\\Recipe" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'recipe' => 'App\\Entity\\Recipe',
        ]);
    }
}
