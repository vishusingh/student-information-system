<?php

	$section = 'student';

	require_once '../core/init.php';

	if (isset($_POST['submit'])) 
	{

		$username = Input::cleanData($_POST["username"]);

		$password = Input::cleanData($_POST["password"]);

		if (Validate::check($username, $password) === true) 
		{	

			$x = new User;

			if ($x->login($username, $password))
			{

				Redirect::to('/home/');

			}
			
		}

	}

	require_once loginView;

?>