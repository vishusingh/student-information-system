<?php

class Upload extends Controller
{
	private $maxFileSize = 5000000;
	private $notesWebPath;
	private $notesRootPath;
	private $timeTablesWebPath;
	private $timeTablesRootPath;
	private $uploadErrors;
	private $courses;

	public function __construct()
	{
		$notesPath = ROOTPATH . '/downloads/notes/';
		$timeTablesPath = ROOTPATH . '/downloads/timetables/';
		$this->notesRootPath = file_exists($notesPath) ? $notesPath : mkdir($notesPath, 0777, true);
		$this->timeTablesRootPath = file_exists($timeTablesPath) ? $timeTablesPath : mkdir($timeTablesPath, 0777, true);
		$this->notesWebPath = '/downloads/notes/';
		$this->timeTablesWebPath = '/downloads/timetables/';
		$this->uploadErrors = uploadErrors();
		$courses = Database::getInstance()->query('SELECT courseName FROM courses')->results();
		$this->courses = isset($courses) && count($courses) ? $courses : [];
	}

	public function index()
	{
		requireAuth();
		require_once HEADER;
		require_once $this->view('upload');
		require_once FOOTER;
	}

	public function notes($message = '')
	{
		requireAuth();
		$errorList = [];
		$success = ($message == 'success') ? true : false;
		$upload = new self;

		if (Input::exists('POST'))
		{
			$notesDescription = Input::get('description');
			$addedBy = User::data('username');
			$courseName = Input::get('course');
			$year = Input::get('year');
			$semester = Input::get('semester');
			$notesFile = $_FILES['file'];
			$uploadError = $notesFile['error'];
			$error = $this->uploadErrors[$uploadError];

			if (empty($notesDescription) || empty($addedBy) || empty($courseName) || empty($year) || empty($semester))
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

					if (Database::insert('notes', $data))
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
		require_once HEADER;
		require_once $this->view('notes-upload');
		require_once FOOTER;
	}

	public function timetable($message = '')
	{
		requireAuth();
		$success = ($message == 'success') ? true : false;
		$errorList = [];
		$upload = new self;

		if (Input::exists('POST'))
		{
			$timeTableDescription = Input::get('description');
			$addedBy = User::data('username');
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

					if (Database::insert('timetables', $data))
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
		require_once HEADER;
		require_once $this->view('timetable-upload');
		require_once FOOTER;
	}

	public function getCourses() :array
	{
		return $this->courses;
	}
}
