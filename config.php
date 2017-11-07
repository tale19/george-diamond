<?php 

return [
	'url' => 'http://localhost/george-diamond/',
	'database' => [
		'RDBMS' => 'mysql',
		'host' => '127.0.0.1',
		'dbname' => 'george',
		'username' => 'root',
		'password' => '',
		'options' => [
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];
