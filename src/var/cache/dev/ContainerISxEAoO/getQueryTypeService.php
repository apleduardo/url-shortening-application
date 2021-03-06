<?php

namespace ContainerISxEAoO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQueryTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Overblog\GraphQLBundle\__DEFINITIONS__\QueryType' shared service.
     *
     * @return object An instance returned by Overblog\GraphQLBundle\Definition\Builder\TypeFactory::create()
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType'] = ($container->privates['Overblog\\GraphQLBundle\\Definition\\Builder\\TypeFactory'] ?? $container->load('getTypeFactoryService'))->create('Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType');
    }
}
