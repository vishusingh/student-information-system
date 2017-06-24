<?php

	class User
	{

		private static $userDetails;

		private static $sessionName = 'user';

		private static $data;

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
					
					self::$userDetails = $data;

					return true;

				}

			}

			return false;

		}

		public static function login($username = null, $password = null)
		{

			if (self::find($username)) 
			{

				foreach (self::$userDetails as $userData) 
				{

					if (password_verify($password, $userData->password))
					{

						Session::create('userId', $userData->id);

						Session::create('userToken', Token::generate());

						return true;

					}

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

			$data = '';

			$results = Database::getWhere('users', array('id', '=', Session::get('userId')));

			foreach ($results as $result)
			{
				
				$data = $result->$name;

			}

			return $data;

		}
		
	}

?>