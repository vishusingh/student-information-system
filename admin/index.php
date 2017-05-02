<?php

	$page = 'admin';

	$section = 'admin';

	require_once '../core/init.php';

	if (isset($_POST['submit'])) 
	{

		$username = Input::cleanData($_POST["username"]);

		$password = Input::cleanData($_POST["password"]);

		if (Validate::check($username, $password) === true) 
		{	

			$x = new User;

			if ($x->adminLogin($username, $password))
			{

				Redirect::to('/admin/home/');

			}
			
		}

	}

	require_once loginView;

?>