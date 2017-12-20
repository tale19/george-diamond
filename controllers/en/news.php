<?php 

$pageNumber = Request::newsPageNumber();

// set the maximum number of news to be rendered to a page
$newsDisplayLimit = 5; 
// determine the number of news in the DB
$newsCount = count($query->rowCount('news2', 'id'));


// last displayable page (based on display limit)
if ($newsCount % $newsDisplayLimit > 0) {
	$lastPage = floor($newsCount / $newsDisplayLimit) + 1 ;
} elseif ($newsCount % $newsDisplayLimit == 0) {
    $lastPage = floor($newsCount / $newsDisplayLimit);
}


// *** IF PAGE COUNT IS OMMITED OR ZERO, REDIRECT TO THE FIRST PAGE ***
if ($pageNumber == 0 || $pageNumber == '') {
	header('Location: ' . $config['url'] . 'news/1');
}

// *** IF LARGER NUMBER THAN PAGE COUNT IS GIVEN, REDIRECT TO THE LAST PAGE ***
if ($pageNumber > $lastPage) {
	header('Location: ' . $config['url'] . 'news/' . $lastPage);
}

// *** FETCH THE NEWS TO BE DISPLAYED ON EACH PAGE *** 
$displayedNews = $query->selectDescending('news2', 
	News::class, 
	($pageNumber * $newsDisplayLimit) - $newsDisplayLimit, 
	$newsDisplayLimit);






require 'views/en/news.view.php';
var_dump($pageNumber);
