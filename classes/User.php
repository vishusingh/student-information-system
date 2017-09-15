<?php

	class User
	{
		private static $userDetails;
		private static $username;

		public static function create(string $table, array $fields = []) :bool
		{
			return (Database::insert($table, $fields)) ? true : false;
		}

		private static function find(string $user = null) :bool
		{
			if ($user)
			{
				if (self::admin($user))
				{
					return self::admin($user);
				}
				if (self::lecturer($user))
				{
					return self::lecturer($user);
				}
				if (self::student($user))
				{
					return self::student($user);
				}
				return false;
			}
			return false;
		}

		public static function update(string $table, array $fields = []) :bool
		{
			return Database::update($table, $fields);
		}

		public static function delete(string $table, array $fields = [])
		{
			return Database::delete($table, $fields);
		}

		public static function login(string $username = null, string $password = null)
		{
			if (self::find($username))
			{
				if (password_verify($password, self::$userDetails->password))
				{
					Token::generate('userId');
					Session::create('username', self::$userDetails->username);
					Token::generate('userToken');
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
			if (self::find(Session::get('username')))
			{
				return self::$userDetails->$name;
			}
			return '';
		}

		private static function admin(string $user = null)
		{
			if ($user)
			{
				$data = Database::getWhere('admins', ['username', '=', $user]);
				if (count($data))
				{
					self::$userDetails = $data[0];
					return true;
				}
			}
			return false;
		}

		private static function lecturer(string $user = null)
		{
			if ($user)
			{
				$data = Database::getWhere('lecturers', ['username', '=', $user]);
				if (count($data))
				{
					self::$userDetails = $data[0];
					return true;
				}
			}
			return false;
		}

		private static function student(string $user = null)
		{
			if ($user)
			{
				$data = Database::getWhere('students', ['username', '=', $user]);
				if (count($data))
				{
					self::$userDetails = $data[0];
					return true;
				}
			}
			return false;
		}
	}
