<?php

	class Token
	{
		public static function generate(string $tokenName) :string
		{
			return Session::create($tokenName, hash('sha256', uniqid()));
		}

		public static function check(string $tokenName, string $token) :bool
		{
			if(Session::exists($tokenName) && $token === Session::get($tokenName))
			{
				Session::delete($tokenName);
				return true;
			}
			return false;
		}
	}
