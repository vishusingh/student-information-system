<?php

class Lecturers extends Controller
{
	private $app;
	private $data;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->data = new DataModel($this->app);
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->app->getAuthenticator()->requireAdmin();
		$this->renderTemplate('lecturers.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'All lecturers'
			]
		));
	}

	public function view($id = '')
	{

	}
}
