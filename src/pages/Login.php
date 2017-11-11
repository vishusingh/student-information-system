<?php

	class Login extends Controller
	{
		public static function index()
		{
			$pageTitle = 'Login | SIS';
			$errorList = [];

			if (Input::exists('POST'))
			{
				$username = Input::get('username');
				$password = Input::get('password');
				$token = Input::get('loginToken');

				if (empty($username) || empty($password))
				{
					$errorList[] = 'Username or Password must not be empty';
				}
				if (!count($errorList))
				{
					if (User::login($username, $password))
			    	{
			    		Redirect::to('/dashboard/');
			    	}
			    	else
			    	{
			    		$errorList[] = 'Incorrect username or password.';
			    	}
				}
			}
			require_once $this->view('login');
		}
	}
