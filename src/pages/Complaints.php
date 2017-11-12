<?php

class Complaints extends Controller
{
	public function index()
	{
		$page = new Page('Complaints | SIS');
		$complaints = Database::getInstance()->query('select * from complaints order by complaints.complaint_id desc limit 5;')->results();
		require_once HEADER;
		require_once $this->view('complaints');
		require_once FOOTER;
	}

	public function new($param1 = '')
	{
		$page = new Page('New Complaint | SIS');
		$success = $param1 == 'success' ? true : false;
		if (Input::exists('POST'))
		{
			$title = Input::get('title');
			$message = Input::get('message');
			$errorList = [];
			if (empty($title) || empty($message))
			{
				$errorList[] = 'All fields are required';
			}
			if (!count($errorList))
			{
				$data = [
					'complaint_title' => $title,
					'complaint_message' => $message,
					'complaint_creator' => User::data('username'),
					'complaint_date' => date('Y-m-d h:i:sa')
				];

				if (Database::insert('complaints', $data))
				{
					Redirect::to('/complaints/new/success/');
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}
		require_once HEADER;
		require_once $this->view('new-complaint');
		require_once FOOTER;
	}
}
