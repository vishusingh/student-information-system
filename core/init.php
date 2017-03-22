<?php

	/**
	* Report simple running errors
	*/
	error_reporting(E_ALL);

	/**
	* Display errors on screen
	*/
	ini_set('display_errors', 1);

	/**
	* Define root path i.e /var/www/student-information-system
	*/
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);	

	function my_autoloader($class) 
	{
    	require_once ROOT_PATH . '/classes/' . $class . '.php';
	}

	spl_autoload_register('my_autoloader');

	session_start();

?>