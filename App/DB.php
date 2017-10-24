<?php

namespace App;

class DB
{
	protected $dbh;

	public function __construct()
	{
		$this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'root', '');
	}

	public function query(string $sql, array $params = [], $class = \stdClass::class)
	{
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);
		return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
	}

	public function insert()
	{

	}

	public  function  update()
	{

	}
}