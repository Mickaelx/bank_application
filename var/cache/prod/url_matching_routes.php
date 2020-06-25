<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home_unlogged', '_controller' => 'App\\Controller\\BankOperationsController::unloggedHome'], null, null, null, false, false, null]],
        '/operations' => [[['_route' => 'home_logged', '_controller' => 'App\\Controller\\BankOperationsController::index'], null, null, null, false, false, null]],
        '/operation/new' => [[['_route' => 'operation_create', '_controller' => 'App\\Controller\\BankOperationsController::form'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/operation/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:37)'
                        .'|delete(*:50)'
                    .')'
                    .'|(*:58)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'operation_edit', '_controller' => 'App\\Controller\\BankOperationsController::form'], ['id'], null, null, false, false, null]],
        50 => [[['_route' => 'operation_delete', '_controller' => 'App\\Controller\\BankOperationsController::delete'], ['id'], null, null, false, false, null]],
        58 => [
            [['_route' => 'operation_show', '_controller' => 'App\\Controller\\BankOperationsController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
