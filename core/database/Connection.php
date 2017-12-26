<?php 


class Connection
{
	public static function make($configDB)
	{
		try {
			// return new PDO('mysql:host = 127.0.0.1; dbname=george', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			return new PDO(
				$configDB['dsn'], 
				$configDB['username'], 
				$configDB['password'], 
				$configDB['options']
				);
		} catch (PDOException $exc) {
			die($exc->getMessage());
		}
	}
	// function __construct(argument)
	// {
	// 	# code...
	// }
}

