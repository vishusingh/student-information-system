<?php

	class Login extends Controller
	{
		public static function index()
		{
			$pageTitle = 'Login';
			$errorList = array();

			if(Input::exists('POST'))
			{
				$username = Input::get('username');
				$password = Input::get('password');
				$token = Input::get('loginToken');

				if(empty($username) || empty($password))
				{
					$errorList[] = 'Username or Password must not be empty';
				}

				if (count($errorList) == 0)
				{
					if (User::login($username, $password))
			    	{
			    		Redirect::to('/dashboard/');
			    	}
			    	else
			    	{
			    		$errorList[] = 'Invalid username or password.';
			    	}
				}
			}
			require_once $this->view('login');
			require_once FOOTER;
		}
	}
