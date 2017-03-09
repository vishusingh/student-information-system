<?php

	/**
	* @author Kidhoma Norman
	*/
	class User 
	{
		private $_db;

		public function __construct()
		{
			$this->_db = Database::getInstance();
		}
		
		public function login($username, $password)
		{			
			$query = $this->_db->query("SELECT * FROM test WHERE username = ? AND password = ?", array($username, $password));
			return ($query->count() > 0) ? true : false;
		}
		
	}
?>