<?php

	$section = 'student';

	require_once '../core/init.php';

	if (Input::exists()) 
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

			if (strlen($username) > 32 || strlen($password) > 32) 
			{
				


			}

		}

	}

	require_once loginView;

?>