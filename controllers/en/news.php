<?php 

$displayedNews = $query->selectDescending('news2', News::class, (Request::newsId() * 5) - 5, 5);
$newsCount = count($query->rowCount('news2'));

require 'views/en/news.view.php';
