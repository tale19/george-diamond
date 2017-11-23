<?php 

$uri = ltrim(strrchr($_SERVER['REQUEST_URI'], '/'), '/');
$articleID = ltrim(strrchr($_SERVER['REQUEST_URI'], '-'), '-');


require 'core/bootstrap.php';
$router = new Router;

require 'routes.php';
// die(var_dump($_SERVER['REQUEST_URI']));
// die(var_dump($uri));

require $router->direct($uri);

// require 'controllers/en/index.php';

