<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_unlogged', '_controller' => 'App\\Controller\\BankOperationsController::unloggedHome'], null, null, null, false, false, null]],
        '/operations' => [[['_route' => 'home_logged', '_controller' => 'App\\Controller\\BankOperationsController::index'], null, null, null, false, false, null]],
        '/operation/new' => [[['_route' => 'operation_create', '_controller' => 'App\\Controller\\BankOperationsController::form'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\BankOperationsController::showCategory'], null, null, null, false, false, null]],
        '/cateogry/new' => [[['_route' => 'category_add', '_controller' => 'App\\Controller\\BankOperationsController::addCategory'], null, null, null, false, false, null]],
        '/payementMethod' => [[['_route' => 'payementMethod_show', '_controller' => 'App\\Controller\\BankOperationsController::showPayementMethod'], null, null, null, false, false, null]],
        '/payementMethod/new' => [[['_route' => 'payementMethod_add', '_controller' => 'App\\Controller\\BankOperationsController::addPayementMethod'], null, null, null, false, false, null]],
        '/statistics' => [[['_route' => 'statistics', '_controller' => 'App\\Controller\\BankOperationsController::stats'], null, null, null, false, false, null]],
        '/operationsJsonified' => [[['_route' => 'operationsJsonified', '_controller' => 'App\\Controller\\BankOperationsController::operationsAPI'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/operation/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:199)'
                        .'|delete(*:213)'
                    .')'
                    .'|(*:222)'
                .')'
                .'|/category/([^/]++)/(?'
                    .'|edit(*:257)'
                    .'|delete(*:271)'
                .')'
                .'|/payementMethod/([^/]++)/(?'
                    .'|edit(*:312)'
                    .'|delete(*:326)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'operation_edit', '_controller' => 'App\\Controller\\BankOperationsController::form'], ['id'], null, null, false, false, null]],
        213 => [[['_route' => 'operation_delete', '_controller' => 'App\\Controller\\BankOperationsController::delete'], ['id'], null, null, false, false, null]],
        222 => [[['_route' => 'operation_show', '_controller' => 'App\\Controller\\BankOperationsController::show'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\BankOperationsController::addCategory'], ['id'], null, null, false, false, null]],
        271 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\BankOperationsController::deleteCategory'], ['id'], null, null, false, false, null]],
        312 => [[['_route' => 'payementMethod_edit', '_controller' => 'App\\Controller\\BankOperationsController::addPayementMethod'], ['id'], null, null, false, false, null]],
        326 => [
            [['_route' => 'payementMethod_delete', '_controller' => 'App\\Controller\\BankOperationsController::deletePayementMethod'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
