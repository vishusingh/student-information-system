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

	session_start();

	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

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

	define('ROOTPATH', $_SERVER['DOCUMENT_ROOT']);
	define('HEADER', ROOTPATH . '/src/includes/header.php');
	define('FOOTER', ROOTPATH . '/src/includes/footer.php');
	define('NAV', ROOTPATH . '/src/includes/nav.php');

	$configIni = parse_ini_file(ROOTPATH . '/config.ini', true);
	define('DBHOST', $configIni['database']['host']);
	define('DBUSERNAME', $configIni['database']['username']);
	define('DBPASS', $configIni['database']['password']);
	define('DBPORT', $configIni['database']['port']);
	define('DBNAME', $configIni['database']['dbname']);
	define('DBDRIVER', $configIni['database']['driver']);

	function autoloadClasses($class)
	{
		$folderPath = "/classes/";
		$folderPath1 = "/controllers/";

		if (file_exists(ROOTPATH . $folderPath . $class . '.php'))
		{
			require_once ROOTPATH . $folderPath . $class . '.php';
		}
		else
		{
			require_once ROOTPATH . $folderPath1 . $class . '.php';
		}
	}
	
	spl_autoload_register('autoloadClasses');

	require_once ROOTPATH . '/src/includes/functions.php';

	$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

	if ($url == '/')
	{
		Index::home();
	}
	else
	{
        $requestedController = ucfirst(strtolower($url[0]));

        $requestedAction = isset($url[1]) ? $url[1] : '';

        $requestedParams = array_slice($url, 2);

        $ctrlPath = ROOTPATH."/controllers/$requestedController.php";

        if (file_exists($ctrlPath))
        {
        	$newPage = new $requestedController;
        	if ($requestedAction != '')
            {
                return $newPage->$requestedAction($requestedParams);
            }
            return $newPage->index();
        }
        else
        {
            header('HTTP/1.1 404 Not Found');
            die('404 - The file - '.$ctrlPath.' - not found');
        }
	}
	
?>
