<?php 

use App\Core\Request;

$newsPage =  Request::newsPageNumber();
$articleId =  Request::articleId();


$router->get('', 'PagesController@home');
$router->get('home', 'PagesController@home');
$router->get('bio', 'PagesController@bio');
$router->get('shows', 'PagesController@shows');
$router->get('photos', 'controllers/en/PagesController@photos');
$router->get('videos', 'PagesController@videos');
$router->get('contact', 'PagesController@contact');
$router->get('news/' . $newsPage, 'NewsController@news');
$router->get('news/article/' . $articleId, 'NewsController@article');
$router->get('search', 'NewsController@search');

