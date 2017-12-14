<?php

class Students extends Controller
{
	private $app;
	private $data;
	private $database;
	private $session;
	private $user;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->data = new DataModel($this->app);
		$this->database = $this->app->getDatabase();
		$this->session = $this->app->getSession();
		$this->user = $this->app->getUser();
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->renderTemplate('students.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'All students',
				'success' => $this->session->has('success'),
				'successMessage' => $this->session->flash('success')
			]
		));
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function new()
	{
		$this->app->getAuthenticator()->requireAdmin();
		$post = $this->app->getRequest()->getPost();
		$errorList = [];
		$username = $email = $password = $fname = $lname = $mname = $nationality = '';

		if (Input::exists('POST'))
		{
			$username = strtolower($post->getSanitized('username'));
			$email = $post->getSanitized('email');
			$password = $post->getSanitized('password');
			$gender = $post->getSanitized('gender');
			$course = $post->getSanitized('course');
			$fname = $post->get('first_name');
			$lname = $post->get('last_name');
			$mname = $post->get('middle_name');
			$nationality = $post->get('nationality');
			$fields = [$username, $email, $password, $fname, $lname, $mname, $nationality];

			if ($this->user->find($username))
			{
				$errorList[] = 'Username already taken';
			}

			if (count($fields))
			{
				foreach ($fields as $field)
				{
					if (empty($field))
					{
						$errorList[] = 'All fields with * are required';
						break;
					}
				}
			}

			if (count($errorList) === 0)
			{
				$data  = [
					'username' => $username,
					'email' => $email,
					'course' => $course,
					'gender' => $gender,
					'nationality' => $nationality,
					'first_name' => $fname,
					'last_name' => $lname,
					'middle_name' => $mname,
					'password' => password_hash($password, PASSWORD_DEFAULT),
					'joined' => date('Y-m-d'),
					'role' => 'student'
				];

				if ($this->database->insert('students', $data))
				{
					$this->session->set('success', 'Student has been successfully added');
					Redirect::to('/students/');
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}

		$this->renderTemplate('new_student.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'Add new student to system',
				'coursesCounter' => count($this->data->getCourses()),
				'courses' => $this->data->getCourses(),
				'errorCounter' => count($errorList),
				'errors' => $errorList,
			]
		));
	}
}
