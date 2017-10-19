<?php 

require '../database/Connection.php';
require '../Database/QueryBuilder.php';
require '../News.php';




$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$third = $query->selectRow('news2', 3);
var_dump($third);
$formattedDate = $third[0]->formatDate();
// $treca = new News($third[0]->id, $third[0]->title, $third[0]->date, $third[0]->content);
var_dump($formattedDate);
// echo($treca->title);

// $formattedDate = $treca->formatDate();



// var_dump($date);

require 'index.view.php';


