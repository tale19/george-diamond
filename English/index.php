<?php 

require '../bootstrap.php';
require '../News.php';

$topNews = [
	$query->selectDescending('news2', News::class)[0],
	$query->selectDescending('news2', News::class)[1],
	$query->selectDescending('news2', News::class)[2]
	// $query->selectRow('news2', 3, News::class)[0],
];
// var_dump($topNews);

// $third = $query->selectRow('news2', 3, News::class)[0]; // [0] at the end: $third = $third[0];
// var_dump($third);
// $treca = new News($third[0]->id, $third[0]->title, $third[0]->date, $third[0]->content);
// var_dump($formattedDate);
// echo($treca->title);

// $formattedDate = $treca->formatDate();

// var_dump($third->getDate()); die;

// var_dump($date);

require 'index.view.php';


