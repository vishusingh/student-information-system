<?php

class Upload extends Controller
{
	private $app;
	private $maxFileSize = 5000000;
	private $notesWebPath;
	private $notesRootPath;
	private $timeTablesWebPath;
	private $timeTablesRootPath;
	private $uploadErrors;
	private $data;
	private $database;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$rootPath = $this->app->getRootPath();
		$this->database = $this->app->getDatabase();
		$this->data = new DashboardModel($this->app);
		$notesPath = $rootPath . 'downloads/notes/';
		$timeTablesPath = $rootPath . 'downloads/timetables/';
		$this->notesRootPath = file_exists($notesPath) ? $notesPath : mkdir($notesPath, 0777, true);
		$this->timeTablesRootPath = file_exists($timeTablesPath) ? $timeTablesPath : mkdir($timeTablesPath, 0777, true);
		$this->notesWebPath = '/downloads/notes/';
		$this->timeTablesWebPath = '/downloads/timetables/';
		$this->uploadErrors = uploadErrors();
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->renderTemplate('upload.tpl', array_merge($this->app->getDefinitions(), ['pageTitle' => 'Upload']));
	}

	/**
	 * @param string $message
	 * @throws \Dwoo\Exception
	 */
	public function notes($message = '')
	{
		$this->app->getAuthenticator()->requireAdmin();
		$errorList = [];
		$success = ($message == 'success') ? true : false;

		if (Input::exists('POST'))
		{
			$notesDescription = Input::get('description');
			$addedBy = $this->app->getProfile()->getUsername();
			$courseName = Input::get('course');
			$year = Input::get('year');
			$semester = Input::get('semester');
			$notesFile = $_FILES['file'];
			$uploadError = $notesFile['error'];
			$error = $this->uploadErrors[$uploadError];

			if (empty($notesDescription) || empty($courseName) || empty($year) || empty($semester))
			{
				$errorList[] = 'All fields are required';
			}
			if ($notesFile['size'] <= $this->maxFileSize && $notesFile['error'] == 0)
			{
				$fileName = uniqid() . '-' . $notesFile['name'];
				$path = $this->notesRootPath . $fileName;
				$moveFile = move_uploaded_file($notesFile['tmp_name'], $path);

				if (!count($errorList) && $moveFile)
				{
					$webPath = $this->notesWebPath . $fileName;
					$data = [
						'description' => $notesDescription,
						'added_by' => $addedBy,
						'course' => $courseName,
						'year' => $year,
						'semester' => $semester,
						'rootpath' => $path,
						'webpath' => $webPath,
						'date_added' => date('Y-m-d h:i:sa')
					];

					if ($this->database->insert('notes', $data))
					{
						Redirect::to('/upload/notes/success/');
					}
					else
					{
						$errorList[] = 'Internal server error. Please try again later';
					}
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
			else
			{
				$errorLis[] = $error;
			}
		}
		$this->renderTemplate('notes_upload.tpl', array_merge($this->app->getDefinitions(),
			[
				'errorCounter' => count($errorList),
				'errors' => $errorList,
				'success' => $success,
				'pageTitle' => 'Upload notes',
				'coursesCounter' => count($this->data->getCourses()),
				'courses' => $this->data->getCourseNames()
			]
		));
	}

	/**
	 * @param string $message
	 * @throws \Dwoo\Exception
	 */
	public function timetable($message = '')
	{
		$this->app->getAuthenticator()->requireAdmin();
		$success = ($message == 'success') ? true : false;
		$errorList = [];

		if (Input::exists('POST'))
		{
			$timeTableDescription =	Input::get('description');
			$addedBy = $this->app->getProfile()->getUsername();
			$timetableFile = $_FILES['file'];
			$uploadError = $timetableFile['error'];
			$error = $this->uploadErrors[$uploadError];

			if (empty($timeTableDescription))
			{
				$errorList[] = 'All fields are required';
			}
			if ($timetableFile['size'] <= $this->maxFileSize && $timetableFile['error'] == 0)
			{
				$fileName = uniqid() . '-' . $timetableFile['name'];
				$path = $this->timeTablesRootPath . $fileName;
				$moveFile = move_uploaded_file($timetableFile['tmp_name'], $path);

				if (!count($errorList) && $moveFile)
				{
					$webPath = $this->timeTablesWebPath . $fileName;
					$data = [
						'description' => $timeTableDescription,
						'added_by' => $addedBy,
						'rootpath' => $path,
						'webpath' => $webPath,
						'date_added' => date('Y-m-d h:i:sa')
					];

					if ($this->database->insert('timetables', $data))
					{
						Redirect::to('/upload/timetable/success/');
					}
					else
					{
						$errorList[] = 'Internal server error. Please try again later';
					}
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
			else
			{
				$errorList[] = $error;
			}
		}
		$this->renderTemplate('timetable_upload.tpl', array_merge($this->app->getDefinitions(),
			[
				'errorCounter' => count($errorList),
				'errors' => $errorList,
				'success' => $success,
				'pageTitle' => 'Upload timetable'
			]
		));
	}
}
