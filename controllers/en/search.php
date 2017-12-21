<?php 

$searchQuery = $_REQUEST;

$searchResults = $query->search($searchQuery['search'], 'news2', News::class);

require 'views/en/search.view.php';
