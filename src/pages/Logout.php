<?php

class Logout
{
	private $app;

	public function __construct(IApp $app)
	{
		$this->app = $app;
	}

	public function index()
	{
		session_destroy();
		Redirect::to('/login/');
	}

}
