<?php

// Create Router instance
$router = new Router();

$router->get('/', 'PagesController@home' ); /*page d'accueil*/
$router->get('/about', 'PagesController@about');

$router->get('/contactez-nous', 'PagesController@contact');
    $router->post('/form', 'PagesController@traitementForm');
        $router->get('/contactez-nous','PagesController@contact');
        $router->post('/contactez-nous','PagesController@traitementForm');

$router->get('/ajout-article', 'PagesController@addanarticle');
    $router->post('/formarticle', 'PagesController@traitementarticle');
        $router->get('/ajout-article','PagesController@addanarticle');
        $router->post('/ajout-article','PagesController@traitementarticle');

// Run it!
$router->run();