<?php

namespace ContainerEZhrClF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompileCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Overblog\GraphQLBundle\Command\CompileCommand' shared service.
     *
     * @return \Overblog\GraphQLBundle\Command\CompileCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Command/CompileCommand.php';

        $container->services['Overblog\\GraphQLBundle\\Command\\CompileCommand'] = $instance = new \Overblog\GraphQLBundle\Command\CompileCommand(($container->services['overblog_graphql.cache_compiler'] ?? $container->getOverblogGraphql_CacheCompilerService()));

        $instance->setName('graphql:compile');

        return $instance;
    }
}
