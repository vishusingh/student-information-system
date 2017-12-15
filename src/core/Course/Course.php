<?php

class Course
{
	private $database;

	public function __construct(Database $database)
	{
		$this->database = $database;
	}

	public function getAllCourses() :array
	{
		return $this->database->fetchAll('SELECT * FROM courses');
	}

	public function getCourseName($id) :string
	{
		$courseName = $this->database->query('SELECT name FROM courses WHERE id = ?', [$id], 2);
		return $courseName['name'];
	}
}
