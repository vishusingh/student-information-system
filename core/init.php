<?php
	
	/**
	* @author Kidhoma Norman
	*/

	/**
	* Report simple running errors
	*/
	
	error_reporting(E_ALL);

	/**
	* Display errors on screen for development
	*/

	ini_set('display_errors', 1);

	/**
	* Define root path of system
	*/

	define('rootPath', $_SERVER['DOCUMENT_ROOT']);

	/**
	* Define base url path of system i.e http://127.0.0.1
	*/

	define('baseUrl', '');	

	
	/**
	* Require function to include all definitions for the system
	*/

	require_once rootPath . '/includes/definitions.php';

	/**
	* Require function to include all common variables for the system
	*/

	require_once rootPath . '/includes/variables.php';

	/**
	* Function to acquire classes from classes folder
	*/

	function loadClasses($class) 
	{

    	require_once rootPath . '/classes' . '/' . $class . '.php';
    	
	}

	/**
	* Function to load classes from loadClasses function
	*/

	spl_autoload_register('loadClasses');

	/**
	* Require function to include all common functions for the system
	*/

	require_once rootPath . '/includes/functions/functions.php';

	require_once rootPath . '/includes/functions/databaseQueryFunctions.php';
	
?>