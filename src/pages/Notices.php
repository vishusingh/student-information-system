<?php

class Notices extends Controller
{
	private $app;
	private $database;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->database = $this->app->getDatabase();
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->renderTemplate('notices.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'All notices',
			]
		));
	}

	/**
	 * @param string $param
	 * @throws \Dwoo\Exception
	 */
	public function new($param = '')
	{
		$errorList = [];
		$success = $param == 'success' ? true : false;

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

				if ($this->database->insert('notices', $data))
				{
					Redirect::to('/notices/new/success/');
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}
		$this->renderTemplate('new_notice.tpl', array_merge($this->app->getDefinitions(),
			[
				'message' => $this->app->getRequest()->getPost()->get('message'),
				'title' => $this->app->getRequest()->getPost()->get('title'),
				'pageTitle' => 'Post new notice',
				'errorCounter' => count($errorList),
				'errors' => $errorList,
				'success' => $success
			]
		));
	}
}
