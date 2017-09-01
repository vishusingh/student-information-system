<?php

	/**
	* @author Kidhoma Norman
	* @package Student Information System
	* @license http://opensource.org/licenses/MIT	MIT License
	* @link	https://arksnorman-sis.herokuapp.com
	* @link	https://arksnorman.tk
	* @link http://www.vishusingh.com/
	* @since Version 1.0.0
	*/

	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

	define('ROOTPATH', $_SERVER['DOCUMENT_ROOT']);	

	switch (ENVIRONMENT)
	{
		case 'development':
			error_reporting(-1);
			ini_set('display_errors', 1);
		break;

		case 'testing':
		case 'production':
			ini_set('display_errors', 0);
			if (version_compare(PHP_VERSION, '7.0', '>='))
			{
				error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
			}
			else
			{
				error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
			}
		break;

		default:
			header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
			echo 'The application environment is not set correctly.';
			exit(1);
	}
	
?>
