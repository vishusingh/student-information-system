<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';
	
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

	require_once(ROOT_PATH . '/includes/login.php');
?>