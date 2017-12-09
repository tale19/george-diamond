<?php 

$uri = ltrim(strstr($_SERVER['REQUEST_URI'], '/'), '/');
// $articleId =  ltrim(strrchr($_SERVER['REQUEST_URI'], '/'), '/');
// var_dump($articleId);
// die;

require 'core/bootstrap.php';


// search through URI and direct to the respective controller
// $router = new Router;
// require 'routes.php';
// require $router->direct($uri);

require Router::load('routes.php')
	->direct($uri);
