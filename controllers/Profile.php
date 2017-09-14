<?php

	class Profile extends Controller
	{
		public function index()
		{
			require_once HEADER;
			require_once $this->view('profile');
			require_once FOOTER;
		}
	}

?>