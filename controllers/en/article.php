<?php 
// die(var_dump(strrchr($_SERVER['REQUEST_URI'], 'article/')));
// var_dump($router);
$article = $query->selectRow('news2', $articleId, News::class)[0];

require 'views/en/article.view.php';

