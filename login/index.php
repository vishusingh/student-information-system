<?php 

	require_once '../core/init.php';
	
	$section = 'student';

	$username = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{

		$username = Input::cleanData($_POST["username"]);

		$password = Input::cleanData($_POST["password"]);

		if (Validate::check($username, $password) === true) 
		{	

			$x = new User;

			if ($x->login($username, $password))
			{

				Redirect::to('/home');

			}
			
		}

	}

	if ($section === 'admin') 
	{

		$h1 = 'Admin';

		$title = 'ADMIN | LOGIN';

	}

	if ($section === 'student')
	{

		$h1 = 'Student';

		$title = 'STUDENT | LOGIN';

	}

	require_once loginView;

?>