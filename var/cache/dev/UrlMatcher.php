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
        '/books' => [[['_route' => 'books.index', '_controller' => 'App\\Controller\\BooksController::index'], null, null, null, true, false, null]],
        '/books/login' => [[['_route' => 'books.login', '_controller' => 'App\\Controller\\BooksController::login'], null, null, null, false, false, null]],
        '/books/list' => [[['_route' => 'books.list', '_controller' => 'App\\Controller\\BooksController::list'], null, null, null, false, false, null]],
        '/books/create' => [[['_route' => 'books.create', '_controller' => 'App\\Controller\\BooksController::create'], null, null, null, false, false, null]],
        '/books/search' => [[['_route' => 'books.search', '_controller' => 'App\\Controller\\BooksController::search'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
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
                .'|/books/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:197)'
                        .'|lete/([^/]++)(*:218)'
                    .')'
                    .'|edit/([^/]++)(*:240)'
                .')'
                .'|/product/([^/]++)(*:266)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'books.detail', '_controller' => 'App\\Controller\\BooksController::detail'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'books.delete', '_controller' => 'App\\Controller\\BooksController::delete'], ['id'], null, null, false, true, null]],
        240 => [[['_route' => 'books.edit', '_controller' => 'App\\Controller\\BooksController::edit'], ['id'], null, null, false, true, null]],
        266 => [
            [['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
