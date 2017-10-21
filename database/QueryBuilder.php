<?php 
/**
* 
*/
class QueryBuilder
{
	protected $pdo;
	// public $tableName;
	// public $row;

	// QueryBuilder function depends on instantiated PDO (through make() mmethod):
	function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	// public $fetchedObj;
	public function selectDescending($tableName, $intoClass)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$tableName} ORDER BY date DESC");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}

	public function selectRow($tableName, $row, $intoClass)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$tableName} WHERE id = {$row}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}


}


