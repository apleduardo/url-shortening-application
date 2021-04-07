<?php

namespace ContainerLUnJdlb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGlobalIdFieldResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Overblog\GraphQLBundle\GraphQL\Relay\Node\GlobalIdFieldResolver' shared autowired service.
     *
     * @return \Overblog\GraphQLBundle\GraphQL\Relay\Node\GlobalIdFieldResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/Resolver/ResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/Resolver/AliasedInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/GraphQL/Relay/Node/GlobalIdFieldResolver.php';

        return $container->services['Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver'] = new \Overblog\GraphQLBundle\GraphQL\Relay\Node\GlobalIdFieldResolver();
    }
}