<?php

class DataModel
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

	public function getProfile() :IProfile
	{
		if ($this->session->get('role') === ('admin' || 'lecturer'))
		{
			return $this->app->getProfile();
		}
		return $this->app->getStudentProfile();
	}

	public function getStudents() :array
	{
		return $this->database->fetchAll('SELECT * FROM students');
	}

	public function getAdmins() :array
	{
		return $this->database->fetchAll('SELECT * FROM admins');
	}

	public function getLecturers() :array
	{
		return $this->database->fetchAll('SELECT * FROM lecturers');
	}

	public function getComplaints() :array
	{
		return $this->database->query('SELECT * FROM complaints ORDER BY id DESC limit 3', [], 3);
	}

	public function getNotices() :array
	{
		return $this->database->query('SELECT * FROM notices ORDER BY id DESC limit 2', [], 3);
	}

	public function getCourses() :array
	{
		return $this->database->query('SELECT * FROM courses', [], 3);
	}

	public function getCourseNames() :array
	{
		return $this->database->query('SELECT name FROM courses', [], 3);
	}

	public function getTimetables() :array
	{
		return $this->database->query('SELECT * FROM timetables', [], 3);
	}

	public function getNotes() :array
	{
		return $this->database->query('SELECT * FROM notes', [], 3);
	}

	public function getOnline() :int
	{
		return 1;
	}
}
