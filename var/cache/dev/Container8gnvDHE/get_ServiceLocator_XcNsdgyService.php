<?php

namespace Container8gnvDHE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XcNsdgyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XcNsdgy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XcNsdgy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\FoodController::delete' => ['privates', '.service_locator.Y3VwTXA', 'get_ServiceLocator_Y3VwTXAService', true],
            'App\\Controller\\FoodController::edit' => ['privates', '.service_locator.Y3VwTXA', 'get_ServiceLocator_Y3VwTXAService', true],
            'App\\Controller\\FoodController::index' => ['privates', '.service_locator.K9TtDds', 'get_ServiceLocator_K9TtDdsService', true],
            'App\\Controller\\FoodController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\FoodController::show' => ['privates', '.service_locator.vKi5DOv', 'get_ServiceLocator_VKi5DOvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\FoodController:delete' => ['privates', '.service_locator.Y3VwTXA', 'get_ServiceLocator_Y3VwTXAService', true],
            'App\\Controller\\FoodController:edit' => ['privates', '.service_locator.Y3VwTXA', 'get_ServiceLocator_Y3VwTXAService', true],
            'App\\Controller\\FoodController:index' => ['privates', '.service_locator.K9TtDds', 'get_ServiceLocator_K9TtDdsService', true],
            'App\\Controller\\FoodController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\FoodController:show' => ['privates', '.service_locator.vKi5DOv', 'get_ServiceLocator_VKi5DOvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\FoodController::delete' => '?',
            'App\\Controller\\FoodController::edit' => '?',
            'App\\Controller\\FoodController::index' => '?',
            'App\\Controller\\FoodController::new' => '?',
            'App\\Controller\\FoodController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\FoodController:delete' => '?',
            'App\\Controller\\FoodController:edit' => '?',
            'App\\Controller\\FoodController:index' => '?',
            'App\\Controller\\FoodController:new' => '?',
            'App\\Controller\\FoodController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
