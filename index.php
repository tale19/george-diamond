<?php 

require 'core/bootstrap.php';

// search through URI and direct to the respective controller
require Router::load('routes.php')
	->direct(Request::uri());
