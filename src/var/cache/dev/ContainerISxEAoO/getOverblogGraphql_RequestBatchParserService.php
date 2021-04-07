<?php

namespace ContainerISxEAoO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOverblogGraphql_RequestBatchParserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'overblog_graphql.request_batch_parser' shared service.
     *
     * @return \Overblog\GraphQLBundle\Request\BatchParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Request/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Request/UploadParserTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/overblog/graphql-bundle/src/Request/BatchParser.php';

        return $container->services['overblog_graphql.request_batch_parser'] = new \Overblog\GraphQLBundle\Request\BatchParser();
    }
}
