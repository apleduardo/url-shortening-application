<?php

namespace ContainerEZhrClF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluralIdentifyingRootFieldResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Overblog\GraphQLBundle\GraphQL\Relay\Node\PluralIdentifyingRootFieldResolver' shared autowired service.
     *
     * @return \Overblog\GraphQLBundle\GraphQL\Relay\Node\PluralIdentifyingRootFieldResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/Resolver/ResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/Resolver/AliasedInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/GraphQL/Relay/Node/PluralIdentifyingRootFieldResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Executor/Promise/PromiseAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Executor/Promise/Adapter/SyncPromiseAdapter.php';

        return $container->services['Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver'] = new \Overblog\GraphQLBundle\GraphQL\Relay\Node\PluralIdentifyingRootFieldResolver(($container->privates['GraphQL\\Executor\\Promise\\Adapter\\SyncPromiseAdapter'] ?? ($container->privates['GraphQL\\Executor\\Promise\\Adapter\\SyncPromiseAdapter'] = new \GraphQL\Executor\Promise\Adapter\SyncPromiseAdapter())));
    }
}
