<?php

class Users extends Controller
{
	private $app;
	private $data;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->data = new DataModel($this->app);
	}

	public function student($id = '')
	{

	}

	public function admin($id = '')
	{

	}

	public function lecturer($id = '')
	{

	}
}
