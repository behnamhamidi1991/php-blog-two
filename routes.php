<?php



$router->get('/', 'App/controllers/home.php');
$router->get('/blog', 'App/controllers/blog/index.php');
$router->get('/blog/create', 'App/controllers/blog/create.php');
