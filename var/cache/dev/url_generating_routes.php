<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'home_unlogged' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::unloggedHome'], [], [['text', '/']], [], []],
    'home_logged' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::index'], [], [['text', '/operations']], [], []],
    'operation_create' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::form'], [], [['text', '/operation/new']], [], []],
    'operation_edit' => [['id'], ['_controller' => 'App\\Controller\\BankOperationsController::form'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/operation']], [], []],
    'operation_show' => [['id'], ['_controller' => 'App\\Controller\\BankOperationsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/operation']], [], []],
    'operation_delete' => [['id'], ['_controller' => 'App\\Controller\\BankOperationsController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/operation']], [], []],
    'category_show' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::showCategory'], [], [['text', '/category']], [], []],
    'category_add' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::addCategory'], [], [['text', '/cateogry/new']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\BankOperationsController::addCategory'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\BankOperationsController::deleteCategory'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'payementMethod_show' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::showPayementMethod'], [], [['text', '/payementMethod']], [], []],
    'payementMethod_add' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::addPayementMethod'], [], [['text', '/payementMethod/new']], [], []],
    'payementMethod_edit' => [['id'], ['_controller' => 'App\\Controller\\BankOperationsController::addPayementMethod'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/payementMethod']], [], []],
    'payementMethod_delete' => [['id'], ['_controller' => 'App\\Controller\\BankOperationsController::deletePayementMethod'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/payementMethod']], [], []],
    'statistics' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::stats'], [], [['text', '/statistics']], [], []],
    'operationsJsonified' => [[], ['_controller' => 'App\\Controller\\BankOperationsController::operationsAPI'], [], [['text', '/operationsJsonified']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
