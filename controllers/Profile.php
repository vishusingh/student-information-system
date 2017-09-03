<?php

	class Profile extends User
	{
		public function index()
		{
			require_once View::renderTemplate('profile');
		}

		public function users($username)
		{
			try
			{
				$userInfo = Database::getWhere('users', array('username', '=', $username));
			}
			catch (Exception $e)
			{
				die('User not Found: ' . $e-getMessage());
			}
			require_once View::renderTemplate('profile');
		}

		public function edit()
		{
			
		}
	}

?>