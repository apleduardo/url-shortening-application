<?php

namespace ContainerEZhrClF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOverblogGraphql_RequestExecutorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'overblog_graphql.request_executor' shared service.
     *
     * @return \Overblog\GraphQLBundle\Request\Executor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Request/Executor.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Executor/ExecutorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Executor/Executor.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/Builder/SchemaBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Executor/Promise/PromiseAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Executor/Promise/Adapter/SyncPromiseAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/FieldResolver.php';

        $container->services['overblog_graphql.request_executor'] = $instance = new \Overblog\GraphQLBundle\Request\Executor(new \Overblog\GraphQLBundle\Executor\Executor(), ($container->privates['GraphQL\\Executor\\Promise\\Adapter\\SyncPromiseAdapter'] ?? ($container->privates['GraphQL\\Executor\\Promise\\Adapter\\SyncPromiseAdapter'] = new \GraphQL\Executor\Promise\Adapter\SyncPromiseAdapter())), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['Overblog\\GraphQLBundle\\Resolver\\FieldResolver'] ?? ($container->privates['Overblog\\GraphQLBundle\\Resolver\\FieldResolver'] = new \Overblog\GraphQLBundle\Resolver\FieldResolver())), false);

        $instance->setMaxQueryComplexity(0);
        $instance->setMaxQueryDepth(0);
        $instance->addSchemaBuilder('default', (new \Overblog\GraphQLBundle\Definition\Builder\SchemaBuilder(($container->services['overblog_graphql.type_resolver'] ?? $container->load('getOverblogGraphql_TypeResolverService')), true))->getBuilder('default', 'Query', NULL, NULL, []));
        $instance->enableIntrospectionQuery();

        return $instance;
    }
}