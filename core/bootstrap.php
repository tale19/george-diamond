<?php 
$config = require 'config.php';
require 'model/News.php';
require 'core/database/Connection.php';
require 'core/Database/QueryBuilder.php';
require 'core/Router.php';

// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);

// *** since we're using "$pdo" just here, we can inline it: ***

$query = new QueryBuilder(
	Connection::make($config['database'])
);