<?php

	class Timetables extends Controller
	{
		public function index()
		{
			$timeTableResults = Database::getAll('timetables');
			require_once HEADER;
			require_once $this->view('timetable');
			require_once FOOTER;
		}
	}
