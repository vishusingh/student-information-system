<?php

class Admins extends Controller
{
	private $app;
	private $data;
	private $admins;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->data = new DataModel($this->app);
		$this->admins = $this->data->getAdmins();
	}

	public function index()
	{
		$this->app->getAuthenticator()->requireAdmin();

	}

	public function view($id = '')
	{

	}
}
