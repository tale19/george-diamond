<?php 
/**
* 
*/
class QueryBuilder
{
	// public $pdo;
	// public $tableName;
	// public $row;
	function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	// public $fetchedObj;
	public function selectRow($tableName, $row)
	{
		$statement = $this->pdo->prepare("select * from {$tableName} where id = {$row}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, 'News');
	}


}


