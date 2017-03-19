<?php

	function my_autoloader($class) 
	{
    	require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/' . $class . '.php';
	}

	spl_autoload_register('my_autoloader');

	session_start();

?>