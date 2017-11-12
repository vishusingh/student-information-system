<?php
define('VIEWPATH', ROOTPATH . DS . 'src' . DS . 'templates' . DS);
define('INCPATH', ROOTPATH . DS . 'src' . DS . 'common' . DS);
define('HEADER', INCPATH . 'header.php');
define('FOOTER', INCPATH . 'footer.php');
define('CONTROLLERPATH', ROOTPATH . DS . 'src' . DS . 'pages' . DS);
define('CLASSPATH', ROOTPATH . DS . 'app' . DS . 'classes' . DS);
define('CSSPATH', '/static/css/');
define('JSPATH', '/static/js/');
define('FONTSPATH', '/static/fonts/');
define('IMAGEPATH', '/static/images/');
define('FOOTNOTE', date('Y') . ' © Student Information System.');
define('SHORTFOOTER', INCPATH . DS . 'shortFooter.php');
define('SHORTHEADER', INCPATH . DS . 'shortHeader.php');

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

function autoloader($className)
{
	if (file_exists(CLASSPATH.$className.'.php'))
	{
		require_once CLASSPATH.$className.'.php';
	}
	else
	{
		require_once CONTROLLERPATH.$className.'.php';
	}
}

spl_autoload_register('autoloader');
require_once INCPATH . 'definitions.php';
require_once INCPATH . 'functions.php';
