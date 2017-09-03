<?php

	class User
	{
		private static $userDetails;

		public static function create($fields = array()) :bool
		{
			return (Database::insert('people', $fields)) ? true : false;
		}

		private static function find($user = null)
		{
			if ($user)
			{				
				$data = Database::getWhere('users', array('username', '=', $user));

				if (count($data)) 
				{					
					self::$userDetails = $data[0];
					return true;
				}
			}
			return false;
		}

		public static function login($username = null, $password = null)
		{
			if (self::find($username)) 
			{	
				if (password_verify($password, self::$userDetails->password))
				{
					Session::create('userId', self::$userDetails->id);
					Session::create('userToken', Token::generate());
					return true;
				}
			}
			return false;
		}

		public static function isLoggedIn()
		{
			return (Session::exists('userId') && Session::exists('userToken')) ? true : false;
		}

		public static function logout()
		{
			return Session::destroy();
		}

		public static function isAdmin()
		{			
			return (self::isLoggedIn() && self::data('admin') == 1) ? true : false;
		}

		public static function data($name)
		{
			$results = Database::getWhere('users', array('id', '=', Session::get('userId')));
			$data = $results[0];			
			return $data->$name;
		}		
	}

?>