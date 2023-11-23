<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/post/add' => [[['_route' => 'app_show_add', '_controller' => 'App\\Controller\\PostController::add'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home_page', '_controller' => 'App\\Controller\\PostController::homePage'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_show_all', '_controller' => 'App\\Controller\\PostController::showAll'], null, null, null, false, false, null]],
        '/post/top-liked' => [[['_route' => 'app_post_top_liked', '_controller' => 'App\\Controller\\PostController::topLiked'], null, null, null, false, false, null]],
        '/post/follows' => [[['_route' => 'app_post_follows', '_controller' => 'App\\Controller\\PostController::follows'], null, null, null, false, false, null]],
        '/boards' => [[['_route' => 'app_show_post_boards', '_controller' => 'App\\Controller\\PostController::boards'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/settings/profile' => [[['_route' => 'app_settings_profile', '_controller' => 'App\\Controller\\SettingsProfileController::profile'], null, null, null, false, false, null]],
        '/settings/profile-image' => [[['_route' => 'app_settings_profile_image', '_controller' => 'App\\Controller\\SettingsProfileController::profileImage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/comment/(?'
                    .'|delete/([^/]++)(*:34)'
                    .'|([^/]++)/edit(*:54)'
                .')'
                .'|/p(?'
                    .'|ost/(?'
                        .'|delete/([^/]++)(*:89)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:115)'
                                .'|comment(*:130)'
                            .')'
                            .'|(*:139)'
                        .')'
                    .')'
                    .'|rofile/([^/]++)(?'
                        .'|(*:167)'
                        .'|/follow(?'
                            .'|s(*:186)'
                            .'|ers(*:197)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:239)'
                    .'|wdt/([^/]++)(*:259)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:305)'
                            .'|router(*:319)'
                            .'|exception(?'
                                .'|(*:339)'
                                .'|\\.css(*:352)'
                            .')'
                        .')'
                        .'|(*:362)'
                    .')'
                .')'
                .'|/follow([^/]++)(*:387)'
                .'|/un(?'
                    .'|follow([^/]++)(*:415)'
                    .'|like([^/]++)(*:435)'
                .')'
                .'|/image/(?'
                    .'|([^/]++)(*:462)'
                    .'|comment/([^/]++)(*:486)'
                .')'
                .'|/like([^/]++)(*:508)'
                .'|/boards/([^/]++)(*:532)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_delete_comment', '_controller' => 'App\\Controller\\DeleteController::deleteComment'], ['comment'], null, null, false, true, null]],
        54 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\PostController::editComment'], ['comment'], null, null, false, false, null]],
        89 => [[['_route' => 'app_delete_post', '_controller' => 'App\\Controller\\DeleteController::deletePost'], ['post'], null, null, false, true, null]],
        115 => [[['_route' => 'app_show_edit', '_controller' => 'App\\Controller\\PostController::editPost'], ['post'], null, null, false, false, null]],
        130 => [[['_route' => 'app_add_comment', '_controller' => 'App\\Controller\\PostController::addComment'], ['post'], null, null, false, false, null]],
        139 => [[['_route' => 'app_show_one', '_controller' => 'App\\Controller\\PostController::showOne'], ['post'], null, null, false, true, null]],
        167 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], ['id'], null, null, false, true, null]],
        186 => [[['_route' => 'app_profile_follows', '_controller' => 'App\\Controller\\ProfileController::follows'], ['id'], null, null, false, false, null]],
        197 => [[['_route' => 'app_profile_followers', '_controller' => 'App\\Controller\\ProfileController::followers'], ['id'], null, null, false, false, null]],
        239 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        259 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        305 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        319 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        339 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        352 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        362 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        387 => [[['_route' => 'app_follow', '_controller' => 'App\\Controller\\FollowerController::follow'], ['id'], null, null, false, true, null]],
        415 => [[['_route' => 'app_unfollow', '_controller' => 'App\\Controller\\FollowerController::unfollow'], ['id'], null, null, false, true, null]],
        435 => [[['_route' => 'app_unlike', '_controller' => 'App\\Controller\\LikeController::unlike'], ['id'], null, null, false, true, null]],
        462 => [[['_route' => 'app_show_image', '_controller' => 'App\\Controller\\ImageController::showFullscreenImage'], ['post'], null, null, false, true, null]],
        486 => [[['_route' => 'app_show_comment_image', '_controller' => 'App\\Controller\\ImageController::showFullscreenCommentImage'], ['comment'], null, null, false, true, null]],
        508 => [[['_route' => 'app_like', '_controller' => 'App\\Controller\\LikeController::like'], ['id'], null, null, false, true, null]],
        532 => [
            [['_route' => 'app_show_posts_by_board', '_controller' => 'App\\Controller\\PostController::getPostsByBoard'], ['board'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
