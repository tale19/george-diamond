<?php

// fetch configuration file
$config = require 'config.php';

// Make a $query object that uses a PDO
// (created through Connection::make() method)*
// to make queries in controller files
$query = new QueryBuilder(
	Connection::make($config['database'])
);

// * Connection::make() uses DB settings stored
// in the config.php['database'] array to create
// the instance of PDO