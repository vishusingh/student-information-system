<?php

class Courses extends Controller
{
	private $app;
	private $database;
	private $session;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->database = $this->app->getDatabase();
		$this->session = $this->app->getSession();
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->renderTemplate('courses.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'All courses',
				'successMessage' => $this->session->flash('success'),
				'success' => $this->session->has('success')
			]
		));
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function new()
	{
		$this->app->getAuthenticator()->requireAdmin();
		$errorList = [];

		if (Input::exists('POST'))
		{
			$courseName = Input::get('courseName');
			$department = Input::get('department');
			$years = Input::get('years');
			$fields = [$courseName, $department, $years];
			if (count($fields))
			{
				foreach ($fields as $field)
				{
					if (empty($field))
					{
						$errorList[] = 'All fields are required';
						break;
					}
				}
			}
			if (!count($errorList))
			{
				$data = [
					'name' => $courseName,
					'department' => $department,
					'years' => $years,
					'date_added' => date('Y-m-d')
				];
				if ($this->database->insert('courses', $data))
				{
					$this->session->set('success', 'Course has been successfully added');
					Redirect::to('/courses/');
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}
		$this->renderTemplate('new_course.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'Add new course',
				'errorCounter' => count($errorList),
				'errors' => $errorList,
				'courseName' => $this->app->getRequest()->getPost()->get('courseName'),
				'department' => $this->app->getRequest()->getPost()->get('department'),
				'years' => $this->app->getRequest()->getPost()->get('years')
			]
		));
	}
}
