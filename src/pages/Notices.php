<?php

class Notices extends Controller
{
	private $title;
	private $message;

	public function index()
	{
		$page = new Page('New Notice | SIS');
		$notices = Database::getInstance()->query('select * from notices order by notice_id desc limit 5;')->results();
		require_once HEADER;
		require_once $this->view('notice');
		require_once FOOTER;
	}

	public function new($param1 = '')
	{
		$page = new Page('New Notice | SIS');
		$success = $param1 == 'success' ? true : false;
		if (Input::exists('POST'))
		{
			$this->title = Input::get('title');
			$this->message = Input::get('message');
			$errorList = [];
			if (empty($this->title) || empty($this->message))
			{
				$errorList[] = 'All fields are required';
			}
			if (!count($errorList))
			{
				$data = [
					'notice_title' => $this->title,
					'notice_message' => $this->message,
					'notice_creator' => User::data('username'),
					'notice_date' => date('Y-m-d h:i:sa')
				];

				if (Database::insert('notices', $data))
				{
					Redirect::to('/notices/new/success/');
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}
		require_once HEADER;
		require_once $this->view('new-notice');
		require_once FOOTER;
	}
}
