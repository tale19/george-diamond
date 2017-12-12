<?php 
/**
* 
*/
class QueryBuilder
{
	protected $pdo;

	// QueryBuilder function depends on instantiated PDO (through make() mmethod):
	function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function rowCount($tableName)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$tableName}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectDescending($tableName, $intoClass, $startFrom, $limit)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$tableName} ORDER BY id DESC LIMIT {$startFrom},{$limit}");
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


