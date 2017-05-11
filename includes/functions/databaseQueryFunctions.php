<?php

	// function to return all results from table
	function databaseGetAll($tableName = null) : array
	{

		$results = array();

		if ($tableName) 
		{
		
			$query = Database::getInstance()->query('SELECT * FROM ' . $tableName);

			return !$query->error() && $query->count() > 0 ? $results = $query->results() : $results;

		}

		return $results;

	}

	// function to return specific fields from table
	function databaseGetSpecificFields($tableName = null, $fields = null)
	{

		$results = array();

		if ($tableName && $fields) 
		{
		
			$query = Database::getInstance()->query('SELECT ' . $fields . ' FROM ' . $tableName);

			return !$query->error() && $query->count() > 0 ? $results = $query->results() : $results = array();

		}

		return $results;

	}

	// function to delete results from table
	function databaseDelete($table, $where) : bool
	{

		if (count($where)) 
		{

			$query = Database::getInstance()->delete($table, $where);

			return !$query->error() ? true : false;

		}

		return false;

	}

	// function to get specific results from table
	function databaseGetWhere($table, $where) : array
	{

		$results = array();

		if (count($where)) 
		{

			$query = Database::getInstance()->get($table, $where);

			return !$query->error() && $query->count() > 0 ? $results = $query->results() : $results;

		}

		return $results;

	}

?>