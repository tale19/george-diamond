<?php 

require '../bootstrap.php';

require '../News.php';

$topNews = [
	$query->selectRow('news2', 3, News::class)[0],
	$query->selectRow('news2', 2, News::class)[0],
	$query->selectRow('news2', 1, News::class)[0]
];

$allNews = $query->selectAll('news2', News::class);
var_dump($allNews);


// $third = $query->selectRow('news2', 3, News::class)[0]; // [0] at the end: $third = $third[0];
// var_dump($third);
// $treca = new News($third[0]->id, $third[0]->title, $third[0]->date, $third[0]->content);
// var_dump($formattedDate);
// echo($treca->title);

// $formattedDate = $treca->formatDate();

// var_dump($third->getDate()); die;

// var_dump($date);

require 'index.view.php';


