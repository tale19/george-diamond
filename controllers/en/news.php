<?php 

// set the maximum number of news to be rendered to a page
$newsDisplayLimit = 5; 
$displayedNews = $query->selectDescending('news2', News::class, (Request::newsPageNumber() * $newsDisplayLimit) - $newsDisplayLimit, $newsDisplayLimit);
$newsCount = count($query->rowCount('news2'));


// last displayable page (based on display limit)
if ($newsCount % $newsDisplayLimit > 0) {
	$lastPage = floor($newsCount / $newsDisplayLimit) + 1 ;
} elseif ($newsCount % $newsDisplayLimit == 0) {
    $lastPage = floor($newsCount / $newsDisplayLimit);
}

// *** IF LARGER NUMBER THAN PAGE COUNT IS GIVEN, REDIRECT TO THE LAST PAGE
$pageNumber = Request::newsPageNumber();
if ($pageNumber > $lastPage) {
	header('Location: ' . $config['url'] . 'news/' . $lastPage);
}

require 'views/en/news.view.php';
