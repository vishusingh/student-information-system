<?php

	class Token
	{

		private static $tokenName = 'token';
		
		public static function generate()
		{

			$generatedToken = md5(uniqid());

			Session::create(self::$tokenName, $generatedToken);

			return $generatedToken;
			
		}

		public static function check($token)
		{
			
			if (Session::exists(self::$tokenName) && $token === Session::get(self::$tokenName)) 
			{

				Session::delete(self::$tokenName);

				return true;

			}

			return false;

		}

	}

?>