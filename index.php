<?php

use App\Core\Request;
// require Composer autoloader
require 'vendor/autoload.php';

require 'core/bootstrap.php';

// search through URI and direct to the respective controller
Router::load('app/routes.php')
	->direct(Request::uri(),Request::method());
