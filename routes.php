<?php 

$newsPage =  Request::newsPageNumber();
$articleId =  Request::articleId();

$router->define([
	'' => 'controllers/en/index.php',
	'home' => 'controllers/en/index.php',
	'bio' => 'controllers/en/bio.php',
	'shows' => 'controllers/en/shows.php',
	'news/' . $newsPage => 'controllers/en/news.php',
	'news/article/' . $articleId => 'controllers/en/article.php',
	'photos' => 'controllers/en/photos.php',
	'videos' => 'controllers/en/videos.php',
	'contact' => 'controllers/en/contact.php'
]);
