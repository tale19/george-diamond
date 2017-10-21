<?php 

require '../bootstrap.php';
require '../News.php';
$allNews = $query->selectDescending('news2', News::class);
var_dump($_SERVER);

require 'news.view.php';
