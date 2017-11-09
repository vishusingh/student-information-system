<?php

	class Session
	{
		public static function create($name, $value)
		{
			return $_SESSION[$name] = $value;
		}

		public static function exists($name) :bool
		{
			return (isset($_SESSION[$name])) ? true : false;
		}

		public static function get($name) :string
		{
			return $_SESSION[$name];
		}

		public static function delete($name)
		{
			if (self::exists($name))
			{
				unset($_SESSION[$name]);
			}
		}

		public static function destroy()
		{
			return session_destroy();
		}
	}
