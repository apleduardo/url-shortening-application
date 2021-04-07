<?php

namespace ContainerISxEAoO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOverblogGraphql_React_PromiseAdapterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'overblog_graphql.react.promise_adapter' shared service.
     *
     * @return \Overblog\GraphQLBundle\Executor\Promise\Adapter\ReactPromiseAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Executor/Promise/PromiseAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Executor/Promise/Adapter/ReactPromiseAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Executor/Promise/PromiseAdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Executor/Promise/Adapter/ReactPromiseAdapter.php';

        return $container->services['overblog_graphql.react.promise_adapter'] = new \Overblog\GraphQLBundle\Executor\Promise\Adapter\ReactPromiseAdapter();
    }
}
