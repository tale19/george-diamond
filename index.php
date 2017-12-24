<?php

// require Composer autoloader
require 'vendor/autoload.php';

require 'core/bootstrap.php';

// search through URI and direct to the respective controller
Router::load('routes.php')
	->direct(Request::uri(),Request::method());
