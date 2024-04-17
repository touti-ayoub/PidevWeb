<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/food' => [[['_route' => 'app_food_index', '_controller' => 'App\\Controller\\FoodController::index'], null, ['GET' => 0], null, true, false, null]],
        '/food/new' => [[['_route' => 'app_food_new', '_controller' => 'App\\Controller\\FoodController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recipe' => [[['_route' => 'app_recipe_index', '_controller' => 'App\\Controller\\RecipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recipe/new' => [[['_route' => 'app_recipe_new', '_controller' => 'App\\Controller\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/food/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                    .'|(*:43)'
                .')'
                .'|/recipe/([^/]++)(?'
                    .'|(*:70)'
                    .'|/edit(*:82)'
                    .'|(*:89)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:128)'
                    .'|wdt/([^/]++)(*:148)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:194)'
                            .'|router(*:208)'
                            .'|exception(?'
                                .'|(*:228)'
                                .'|\\.css(*:241)'
                            .')'
                        .')'
                        .'|(*:251)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_food_show', '_controller' => 'App\\Controller\\FoodController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'app_food_edit', '_controller' => 'App\\Controller\\FoodController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [[['_route' => 'app_food_delete', '_controller' => 'App\\Controller\\FoodController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        70 => [[['_route' => 'app_recipe_show', '_controller' => 'App\\Controller\\RecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_recipe_edit', '_controller' => 'App\\Controller\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'app_recipe_delete', '_controller' => 'App\\Controller\\RecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        128 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        148 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        208 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        228 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        241 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        251 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
