<?php 

require 'core/bootstrap.php';
require 'core/Router.php';
$router = new Router;
require 'routes.php';




require 'model/News.php';
require 'controllers/en/index.php';

