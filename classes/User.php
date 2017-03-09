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
			return ($query->count() > 0) ? $_SESSION['user_session'] = $query->results()[0]->username : false;
		}

		public static function isLoggedIn()
		{
			if(isset($_SESSION['user_session']))
			{
				return true;
			}
		}

		public static function logout()
		{
			session_destroy();
			unset($_SESSION['user_session']);
			return true;
		}
		
	}
?>