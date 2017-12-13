<?php

class Notes extends Controller
{
	private $app;
	private $data;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->data = new DashboardModel($this->app);
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->app->getAuthenticator()->requireLoggedIn();
		$this->renderTemplate('notes.tpl', array_merge($this->app->getDefinitions(),
			[
				'notesCounter' => count($this->data->getNotes()),
				'notes' => $this->data->getNotes(),
				'pageTitle' => 'Notes downloads'
			]
		));
	}
}
