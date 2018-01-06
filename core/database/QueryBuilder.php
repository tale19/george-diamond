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

	public function selectAll($tableName)
	{
	    $sql = "
			SELECT * 
			FROM {$tableName}
			";

		$statement = $this->pdo->prepare($sql);

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectDescending($tableName, $intoClass, $startFrom, $limit)
	{
	    $sql = "
			SELECT * 
			FROM {$tableName} 
			ORDER BY id DESC 
			LIMIT :startFrom, :limit
			";

		$statement = $this->pdo->prepare($sql);

        $statement->execute(['startFrom' => $startFrom, 'limit' => $limit]);

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}

	public function selectRow($tableName, $row, $intoClass)
	{
		$statement = $this->pdo->prepare("
			SELECT * 
			FROM {$tableName} 
			WHERE id = :row
			");
		$statement->execute(['row' => $row]);
		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}

    public function search($tableName, $searchQuery, $intoClass)
    {
//        $attack = "whatever' UNION (SELECT 1,username,2017-04-04, password, 5, 6 FROM testusers);--";
        $sql = "SELECT * FROM {$tableName} 
        WHERE title COLLATE UTF8_GENERAL_CI LIKE ? 
        OR content COLLATE UTF8_GENERAL_CI LIKE ? 
        ORDER BY id DESC";

        $statement = $this->pdo->prepare($sql);

        $statement->execute([$searchQuery, $searchQuery]);

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

}


