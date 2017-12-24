<?php 

$newsPage =  Request::newsPageNumber();
$articleId =  Request::articleId();


$router->get('', 'controllers/en/index.php');
$router->get('home', 'controllers/en/index.php');
$router->get('bio', 'controllers/en/bio.php');
$router->get('shows', 'controllers/en/shows.php');
$router->get('news/' . $newsPage, 'controllers/en/news.php');
$router->get('news/article/' . $articleId, 'controllers/en/article.php');
$router->get('photos', 'controllers/en/photos.php');
$router->get('videos', 'controllers/en/videos.php');
$router->get('contact', 'controllers/en/contact.php');
$router->get('search', 'controllers/en/search.php');

