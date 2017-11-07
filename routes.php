<?php 

$router->define([
	'' => 'controllers/en/index.php',
	'home' => 'controllers/en/index.php',
	'bio' => 'controllers/en/bio.php',
	'shows' => 'controllers/en/shows.php',
	'news' => 'controllers/en/news.php',
	// 'article.php?id=' . $allNews->getId() => 'controllers/en/bio.php',
	'photos' => 'controllers/en/photos.php',
	'videos' => 'controllers/en/videos.php'
]);
