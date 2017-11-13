<?php

	class Dashboard extends Controller
	{
		public function index()
		{
			requireAuth();
			$students = Database::getInstance()->query('SELECT * FROM students')->count();
			$admins = Database::getInstance()->query('SELECT * FROM admins')->count();
			$lecturers = Database::getInstance()->query('SELECT * FROM lecturers')->count();
			$notices = Database::getInstance()->query('select * from notices order by notice_id desc limit 2')->results();
			$complaints = Database::getInstance()->query('select * from complaints order by complaints.complaint_id desc limit 5;')->results();
			require_once HEADER;
			require_once $this->view('dashboard');
			require_once FOOTER;
		}
	}

?>