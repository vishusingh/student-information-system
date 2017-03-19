<?php

	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);	

	function my_autoloader($class) 
	{
    	require_once ROOT_PATH . '/classes/' . $class . '.php';
	}

	spl_autoload_register('my_autoloader');

	session_start();

?>