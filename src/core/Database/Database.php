<?php

class Database
{
	public const SINGLE = 1;
	public const ROW = 2;
	public const ALL = 3;
	public const AFFECTED = 4;
	public const IDENTIFIER = 5;
	private static $instance = null;
	private static $connection;

	public function fetchAll(string $string, array $values = []) :array
	{
		return $this->query($string, $values, self::ALL);
	}

	public function fetchRow(string $string, array $values = []) :array
	{
		$fetchedData = $this->query($string, $values, self::ROW);
		return $fetchedData ? $fetchedData : [];
	}

	public function rowCount(string $string, array $values = []) :int
	{
		return $this->query($string, $values, self::AFFECTED);
	}

	public function delete(string $table, string $where, array $data) :bool
	{
		return $this->query("DELETE FROM $table $where", $data);
	}

	public function getWhere(string $table, string $where, array $data) :array
	{
		$fetchedData = $this->query("SELECT * FROM $table $where", $data, self::ROW);
		return $fetchedData ? $fetchedData : [];
	}

	public function query(string $sql, array $values = [], string $mode = null)
	{
		$statement = self::$connection->prepare($sql);
		if ($statement->execute($values))
		{
			if ($mode == null)
			{
				return true;
			}
			if ($mode == self::SINGLE)
			{
				return $statement->fetchColumn();
			}
			if ($mode == self::ROW)
			{
				return $statement->fetch(PDO::FETCH_ASSOC);
			}
			if ($mode == self::AFFECTED)
			{
				return $statement->rowCount();
			}
			if ($mode == self::IDENTIFIER)
			{
				return self::$connection->lastInsertId();
			}
			if ($mode == self::ALL)
			{
				return $statement->fetchAll(PDO::FETCH_ASSOC);
			}
		}
		return false;
	}

	public function insert(string $table, array $fieldsAndValues) :bool
	{
		if (count($fieldsAndValues))
		{
			$keys = implode(', ', array_keys($fieldsAndValues));
			$values = '';
			$x = 1;
			foreach ($fieldsAndValues as $param)
			{
				$values .= '?';
				if ($x < count($fieldsAndValues))
				{
					$values .= ', ';
					$x++;
				}
			}
			$sql = "INSERT INTO {$table} ($keys) VALUES ($values)";
			return $this->query($sql, array_values($fieldsAndValues));
		}
		return false;
	}

	public static function getInstance(string $connection, string $username, string $password) :Database
	{
		if (is_null(self::$instance))
		{
			self::$instance = new self($connection, $username, $password);
		}
		return self::$instance;
	}

	private function __construct($connection, $username, $password)
	{
		try
		{
			self::$connection = new PDO($connection, $username, $password);
			self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$connection->exec('SET NAMES UTF8');
		}
		catch (PDOException $e)
		{
			die('An attempt to database failed: '. $e->getMessage());
		}
	}
}
