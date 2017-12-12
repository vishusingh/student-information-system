<?php

class Search extends Controller
{
	public function index()
	{
		require_once HEADER;
		require_once $this->view('search');
		require_once FOOTER;
	}
}
