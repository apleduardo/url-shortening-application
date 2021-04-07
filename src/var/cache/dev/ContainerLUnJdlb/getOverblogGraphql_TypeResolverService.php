<?php

namespace ContainerLUnJdlb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOverblogGraphql_TypeResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'overblog_graphql.type_resolver' shared service.
     *
     * @return \Overblog\GraphQLBundle\Resolver\TypeResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/FluentResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/AbstractResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Resolver/TypeResolver.php';

        $container->services['overblog_graphql.type_resolver'] = $instance = new \Overblog\GraphQLBundle\Resolver\TypeResolver();

        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->addSolution('overblog_graphql.definition.string_type', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.string_type']], [0 => 'String'], ['id' => 'overblog_graphql.definition.string_type', 'aliases' => [0 => 'String'], 'alias' => 'String']);
        $instance->addSolution('overblog_graphql.definition.int_type', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.int_type']], [0 => 'Int'], ['id' => 'overblog_graphql.definition.int_type', 'aliases' => [0 => 'Int'], 'alias' => 'Int']);
        $instance->addSolution('overblog_graphql.definition.float_type', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.float_type']], [0 => 'Float'], ['id' => 'overblog_graphql.definition.float_type', 'aliases' => [0 => 'Float'], 'alias' => 'Float']);
        $instance->addSolution('overblog_graphql.definition.boolean_type', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.boolean_type']], [0 => 'Boolean'], ['id' => 'overblog_graphql.definition.boolean_type', 'aliases' => [0 => 'Boolean'], 'alias' => 'Boolean']);
        $instance->addSolution('overblog_graphql.definition.id_type', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.id_type']], [0 => 'ID'], ['id' => 'overblog_graphql.definition.id_type', 'aliases' => [0 => 'ID'], 'alias' => 'ID']);
        $instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\MutationType', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\MutationType']], [0 => 'Mutation'], ['id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\MutationType', 'aliases' => [0 => 'Mutation'], 'alias' => 'Mutation', 'generated' => true]);
        $instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType']], [0 => 'Query'], ['id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType', 'aliases' => [0 => 'Query'], 'alias' => 'Query', 'generated' => true]);
        $instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\ShortnerUrlType', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ShortnerUrlType']], [0 => 'ShortnerUrl'], ['id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ShortnerUrlType', 'aliases' => [0 => 'ShortnerUrl'], 'alias' => 'ShortnerUrl', 'generated' => true]);
        $instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\ShortnerUrlInputType', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ShortnerUrlInputType']], [0 => 'ShortnerUrlInput'], ['id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ShortnerUrlInputType', 'aliases' => [0 => 'ShortnerUrlInput'], 'alias' => 'ShortnerUrlInput', 'generated' => true]);
        $instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType', [0 => [0 => $container, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType']], [0 => 'PageInfo'], ['id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType', 'aliases' => [0 => 'PageInfo'], 'alias' => 'PageInfo', 'generated' => true]);

        return $instance;
    }
}
