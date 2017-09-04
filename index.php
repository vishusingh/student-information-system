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
	define('HEADER', __DIR__ . '/includes/header.php');
	define('FOOTER', __DIR__ . '/includes/footer.php');
	$configIni = __DIR__ . '/config.ini'; 
	define('CONFIG_OPTIONS', parse_ini_file($configIni, true));

	function autoloadClasses($class)
	{
		$folderPath = "/classes/";
		$folderPath1 = "/controllers/";

		if (file_exists(__DIR__ . $folderPath . $class . '.php'))
		{
			require_once __DIR__ . $folderPath . $class . '.php';
		}
		else
		{
			require_once __DIR__ . $folderPath1 . $class . '.php';
		}
	}
	
	spl_autoload_register('autoloadClasses');

	define('DBHOST', Config::getOption('database/host'));
	define('DBUSERNAME', Config::getOption('database/username'));
	define('DBPASS', Config::getOption('database/password'));
	define('DBPORT', Config::getOption('database/port'));
	define('DBNAME', Config::getOption('database/dbname'));
	define('DBDRIVER', Config::getOption('database/driver'));

	require_once __DIR__ . '/includes/functions.php';
	$url = isset($_SERVER['REQUEST_URI']) ? explode('/', ltrim($_SERVER['REQUEST_URI'],'/')) : '/';
	
	if ($url[0] == '')
	{
		Login::index();
	}
	else
	{
        $requestedController = ucfirst(strtolower($url[0]));
        $requestedAction = isset($url[1]) ? $url[1] : '';
        $requestedParams = array_slice($url, 2);
        $ctrlPath = __DIR__ . "/controllers/$requestedController.php";

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
            require_once __DIR__ . '/templates/404.php';
        }
	}
	
?>
