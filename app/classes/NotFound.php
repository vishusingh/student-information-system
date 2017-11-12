<?php

class NotFound extends Controller
{
	public function index()
	{
		$page = new Page('404 | NotFound');
		require_once SHORTHEADER;
		require_once $this->view('404');
		require_once SHORTFOOTER;
	}
}
