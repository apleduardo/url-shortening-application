<?php

namespace ContainerEZhrClF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOverblogGraphql_Definition_IdTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'overblog_graphql.definition.id_type' shared service.
     *
     * @return \GraphQL\Type\Definition\IDType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/Type.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/OutputType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/InputType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/LeafType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/NullableType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/NamedType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/ScalarType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/IDType.php';

        return $container->services['overblog_graphql.definition.id_type'] = \GraphQL\Type\Definition\Type::id();
    }
}