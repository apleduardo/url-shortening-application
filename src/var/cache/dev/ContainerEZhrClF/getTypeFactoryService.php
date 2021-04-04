<?php

namespace ContainerEZhrClF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Overblog\GraphQLBundle\Definition\Builder\TypeFactory' shared service.
     *
     * @return \Overblog\GraphQLBundle\Definition\Builder\TypeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/Builder/TypeFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/ConfigProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/PublicFieldsFilterConfigProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/AclConfigProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/WrapArgumentConfigProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/GlobalVariables.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Security/Security.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/FieldResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Definition/ArgumentFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/FluentResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/AbstractResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/AbstractProxyResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/MutationResolver.php';

        $a = ($container->privates['Overblog\\GraphQLBundle\\Definition\\ArgumentFactory'] ?? ($container->privates['Overblog\\GraphQLBundle\\Definition\\ArgumentFactory'] = new \Overblog\GraphQLBundle\Definition\ArgumentFactory('Overblog\\GraphQLBundle\\Definition\\Argument')));

        return $container->privates['Overblog\\GraphQLBundle\\Definition\\Builder\\TypeFactory'] = new \Overblog\GraphQLBundle\Definition\Builder\TypeFactory(new \Overblog\GraphQLBundle\Definition\ConfigProcessor([0 => new \Overblog\GraphQLBundle\Definition\ConfigProcessor\PublicFieldsFilterConfigProcessor(), 1 => new \Overblog\GraphQLBundle\Definition\ConfigProcessor\AclConfigProcessor(($container->services['overblog_graphql.access_resolver'] ?? $container->load('getOverblogGraphql_AccessResolverService')), ($container->privates['Overblog\\GraphQLBundle\\Resolver\\FieldResolver'] ?? ($container->privates['Overblog\\GraphQLBundle\\Resolver\\FieldResolver'] = new \Overblog\GraphQLBundle\Resolver\FieldResolver()))), 2 => new \Overblog\GraphQLBundle\Definition\ConfigProcessor\WrapArgumentConfigProcessor($a)]), new \Overblog\GraphQLBundle\Definition\GlobalVariables(['container' => $container, 'typeResolver' => ($container->services['overblog_graphql.type_resolver'] ?? $container->load('getOverblogGraphql_TypeResolverService')), 'resolverResolver' => ($container->services['overblog_graphql.resolver_resolver'] ?? $container->load('getOverblogGraphql_ResolverResolverService')), 'mutationResolver' => ($container->services['overblog_graphql.mutation_resolver'] ?? ($container->services['overblog_graphql.mutation_resolver'] = new \Overblog\GraphQLBundle\Resolver\MutationResolver())), 'argumentFactory' => $a, 'security' => new \Overblog\GraphQLBundle\Security\Security(NULL)]));
    }
}
