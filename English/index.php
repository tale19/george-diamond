<?php 

require '../News.php';
require '../bootstrap.php';


$third = $query->selectRow('news2', 3, 'News');
// var_dump($third);
$formattedDate = $third[0]->formatDate();
// $treca = new News($third[0]->id, $third[0]->title, $third[0]->date, $third[0]->content);
// var_dump($formattedDate);
// echo($treca->title);

// $formattedDate = $treca->formatDate();



// var_dump($date);

require 'index.view.php';


