<?php

	class Logout
	{
		public function index()
		{
			User::logout();
    		Redirect::to('/login/');
		}

	}
