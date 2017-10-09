<?php 


/**
* Latest news
*/
class LatestNews
{
	
	function __construct()
	{
		$this->content = "select ";
	}
}






try {
	$pdo = new PDO('mysql:host = 127.0.0.1; dbname=george', 'root', '');
} catch (PDOException $exc) {
	die('No connection');
}


$statement = $pdo->prepare('select * from news where id = 4');

$statement->execute();

// print_r(expression)
require 'index.view.php';


// var_dump($statement->fetchAll(PDO::FETCH_OBJ)[0]->content);

