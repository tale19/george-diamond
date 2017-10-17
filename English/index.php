<?php 

require '../database/Connection.php';
require '../Database/QueryBuilder.php';




$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$third = $query->selectRow('news2', 3);


require 'index.view.php';


