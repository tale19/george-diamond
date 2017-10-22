<?php 


require '../bootstrap.php';
require '../News.php';
$article = $query->selectRow('news2', $_GET['id'], News::class)[0];
var_dump($_GET['id']);

require 'article.view.php';

