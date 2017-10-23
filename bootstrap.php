<?php 
$config = require 'config.php';
require '../database/Connection.php';
require '../Database/QueryBuilder.php';

// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);

// *** since we're using "$pdo" just here, we can inline it: ***

$query = new QueryBuilder(
	Connection::make($config['database'])
);