<?php

class Courses extends Controller
{
	public function index()
	{
		$courses = Database::getAll('courses');
		require_once HEADER;
		require_once $this->view('courses');
		require_once FOOTER;
	}

	public function add($message = '')
	{
		$success = ($message == 'success') ? true : false;
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
					'date' => date('Y-m-d h:i:sa')
				];
				if (Database::insert('courses', $data))
				{
					Redirect::to('/courses/add/success/');
					exit;
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}
		require_once HEADER;
		require_once $this->view('new_course');
		require_once FOOTER;
	}
}
