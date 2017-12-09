<?php 

$config = require 'config.php';

// reqest Router class to define routes
require 'core/Router.php';


require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

require 'models/News.php';

// Make a $query object that uses a PDO, 
// created through Connection::make() method,
// to make queries from controller pages
$query = new QueryBuilder(
	Connection::make($config['database'])
);