<?php 

$uri = ltrim(strstr($_SERVER['REQUEST_URI'], '/'), '/');
$articleId =  ltrim(strrchr($_SERVER['REQUEST_URI'], '/'), '/');
require 'core/bootstrap.php';
$router = new Router;

require 'routes.php';
require $router->direct($uri);