<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/graphql' => [[['_route' => 'overblog_graphql_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], null, null, null, true, false, null]],
        '/graphql/batch' => [[['_route' => 'overblog_graphql_batch_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/graphiql' => [[['_route' => 'overblog_graphiql_endpoint', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/graph(?'
                    .'|ql/graphql/(?'
                        .'|([^/]+)(*:37)'
                        .'|([^/]+)/batch(*:57)'
                    .')'
                    .'|iql/([^/]++)(*:77)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:113)'
                .'|/([^/]++)(*:130)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'overblog_graphql_multiple_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], ['schemaName'], null, null, false, true, null]],
        57 => [[['_route' => 'overblog_graphql_batch_multiple_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], ['schemaName'], null, null, false, false, null]],
        77 => [[['_route' => 'overblog_graphiql_endpoint_multiple', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], ['schemaName'], null, null, false, true, null]],
        113 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        130 => [
            [['_route' => 'shortner_url', '_controller' => 'App\\Controller\\ShortnerController::redirectToUrl'], ['path'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
