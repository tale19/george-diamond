<?php 

$allNews = $query->selectDescending('news2', News::class);

require 'views/en/news.view.php';
