<?php

	class Dashboard extends Controller
	{
		function index()
		{
			requireAuth();
			require_once HEADER;
			require_once $this->view('dashboard');
			require_once FOOTER;
		}
	}

?>