<?php

	class Dashboard extends Controller
	{
		public function index()
		{
			requireAuth();
			$students = Database::getInstance()->query('SELECT * FROM students')->count();
			$admins = Database::getInstance()->query('SELECT * FROM admins')->count();
			$lecturers = Database::getInstance()->query('SELECT * FROM lecturers')->count();		
			require_once HEADER;
			require_once $this->view('dashboard');
			require_once FOOTER;
		}
	}

?>