<?php

	class Notes extends Controller
	{
		public function index()
		{
			$notesResults = Database::getAll('notes');
			require_once HEADER;
			require_once $this->view('notes');
			require_once FOOTER;
		}
	}
