<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_actualite' => [[], ['_controller' => 'App\\Controller\\ActualiteController::showAll'], [], [['text', '/actualite']], [], [], []],
    'app_actualite_show' => [['id'], ['_controller' => 'App\\Controller\\ActualiteController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/actualite']], [], [], []],
    'admin_app_categorie_add' => [[], ['_controller' => 'App\\Controller\\AdminController::add'], [], [['text', '/admin/categorie_add']], [], [], []],
    'admin_app_categories' => [[], ['_controller' => 'App\\Controller\\AdminController::showAll'], [], [['text', '/admin/categories']], [], [], []],
    'admin_app_categorie_update' => [['slug'], ['_controller' => 'App\\Controller\\AdminController::update'], [], [['variable', '_', '[^/]++', 'slug', true], ['text', '/admin/categorie_update']], [], [], []],
    'admin_app_categorie_delete' => [['slug'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '_', '[^/]++', 'slug', true], ['text', '/admin/categorie_delete']], [], [], []],
    'admin_app_article_add' => [[], ['_controller' => 'App\\Controller\\AdminController::addArticle'], [], [['text', '/admin/article_add']], [], [], []],
    'admin_app_articles_gestion' => [[], ['_controller' => 'App\\Controller\\AdminController::gestionArticles'], [], [['text', '/admin/gestion_articles']], [], [], []],
    'admin_app_article_details' => [['id'], ['_controller' => 'App\\Controller\\AdminController::detailsArticle'], ['id' => '\\d+'], [['variable', '_', '\\d+', 'id', true], ['text', '/admin/details_article']], [], [], []],
    'admin_app_article_update' => [['id'], ['_controller' => 'App\\Controller\\AdminController::updateArticle'], ['id' => '\\d+'], [['variable', '_', '\\d+', 'id', true], ['text', '/admin/article_update']], [], [], []],
    'admin_app_article_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteArticle'], ['id' => '\\d+'], [['variable', '_', '\\d+', 'id', true], ['text', '/admin/article_delete']], [], [], []],
    'admin_app_actualite_add' => [[], ['_controller' => 'App\\Controller\\AdminController::addActualite'], [], [['text', '/admin/actualite_add']], [], [], []],
    'admin_app_actualites_gestion' => [[], ['_controller' => 'App\\Controller\\AdminController::gestionActualites'], [], [['text', '/admin/gestion_actualites']], [], [], []],
    'admin_app_actualite_details' => [['id'], ['_controller' => 'App\\Controller\\AdminController::detailsActualite'], ['id' => '\\d+'], [['variable', '_', '\\d+', 'id', true], ['text', '/admin/details_actualite']], [], [], []],
    'admin_app_actualite_update' => [['id'], ['_controller' => 'App\\Controller\\AdminController::updateActualite'], ['id' => '\\d+'], [['variable', '_', '\\d+', 'id', true], ['text', '/admin/actualite_update']], [], [], []],
    'admin_app_actualite_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteActualite'], ['id' => '\\d+'], [['variable', '_', '\\d+', 'id', true], ['text', '/admin/actualite_delete']], [], [], []],
    'app_articles' => [[], ['_controller' => 'App\\Controller\\ArticleController::showAll'], [], [['text', '/articles']], [], [], []],
    'app_articles_categorie' => [['slug'], ['_controller' => 'App\\Controller\\ArticleController::showByCategorie'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/articles']], [], [], []],
    'app_article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/article']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_cours' => [[], ['_controller' => 'App\\Controller\\CoursController::index'], [], [['text', '/cours']], [], [], []],
    'app_historique' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::index'], [], [['text', '/historique']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_informations' => [[], ['_controller' => 'App\\Controller\\InformationsController::index'], [], [['text', '/informations']], [], [], []],
    'app_mentions' => [[], ['_controller' => 'App\\Controller\\MentionsController::index'], [], [['text', '/mentions']], [], [], []],
    'app_professeur' => [[], ['_controller' => 'App\\Controller\\ProfesseurController::index'], [], [['text', '/professeur']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
