<?php

	class HttpRequest
	{
		public $path = null;

	    public function __construct()
	    {
	    	Request::$properties = $_REQUEST;
	        $this->path = $_SERVER['REQUEST_URI'];
	        $this->path = (empty($this->path)) ? "/" : $this->path;
	    }
	}
