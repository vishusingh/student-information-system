<?php

	require_once '../core/init.php';

	$pageTitle = 'Login';

	$errorList = array();
	
	if (Input::exists('POST')) 
	{

		$username = Input::get('username');

		$password = Input::get('password');

		$token  = Input::get('token');

		if (Token::check($token))
		{			

			if (empty($username) || empty($password)) 
			{	

				$errorList[] = 'Username or Password must not be empty';
				
			}

			if (count($errorList) == 0)
			{
				
				if (User::login($username, $password)) 
		    	{

		    		Redirect::to('/home/');

		    	}

		    	else
		    	{
		    		
		    		$errorList[] = 'Invalid username or password.';

		    	}

			}

		}

		else
		{

			$errorList[] = 'There was a problem logging in. Please try again later';

		}

	}

	require_once loginView;

?>