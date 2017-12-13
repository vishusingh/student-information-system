<?php

class Complaints extends Controller
{
	private $app;
	private $data;
	private $database;
	private $session;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->database = $this->app->getDatabase();
		$this->session = $this->app->getSession();
		$this->data = new DataModel($this->app);
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->app->getAuthenticator()->requireAdmin();
		$this->renderTemplate('complaints.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'All Complaints'
			]
		));
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function new()
	{
		$this->app->getAuthenticator()->requireLoggedIn();
		$errorList = [];

		if (Input::exists('POST'))
		{
			$title = Input::get('title');
			$message = Input::get('message');
			if (empty($title) || empty($message))
			{
				$errorList[] = 'All fields are required';
			}
			if (!count($errorList))
			{
				$data = [
					'title' => $title,
					'message' => $message,
					'creator' => $this->app->getProfile()->getUsername(),
					'date_added' => date('Y-m-d h:i:sa')
				];

				if ($this->database->insert('complaints', $data))
				{
					$this->session->set('success', 'Complaint has been sent to our admins. Thanks');
					Redirect::to('/complaints/new/');
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}
		$this->renderTemplate('new_complaint.tpl', array_merge($this->app->getDefinitions(),
			[
				'success' => $this->session->has('success'),
				'successMessage' => $this->session->flash('success'),
				'pageTitle' => 'Add new complaint',
				'errorCounter' => count($errorList),
				'errors' => $errorList,
				'title' => $this->app->getRequest()->getPost()->get('title'),
				'message' => $this->app->getRequest()->getPost()->get('message')
			]
		));
	}
}
