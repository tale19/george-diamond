<?php 

// die(var_dump(Request::articleId()));

$article = $query->selectRow('news2', Request::articleId(), News::class)[0];

require 'views/en/article.view.php';

