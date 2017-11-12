<?php

class Lecturers extends Controller
{
	public function index()
	{
		requireAuth();
		$lecturers = Database::getAll('lecturers');
		require_once HEADER;
		require_once $this->view('lecturers');
		require_once FOOTER;
	}
}
