<?php

	class User
	{

		private static $firstName;

		private static $lastName;
		
		private static $userDetails;

		private static $sessionName = 'user';

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
				
					if ($userData->pin_code == $password) 
					{

						Session::create(self::$sessionName, $userData->id);

						Session::create('username', $userData->username);

						Session::create('email', $userData->email);
				
						return true;

					}

				}

			}

			return false;

		}

		public static function isLoggedIn()
		{

			return (Session::exists(self::$sessionName)) ? true : false;

		}

		public static function logout()
		{

			Session::delete(self::$sessionName);

		}
		
	}

?>