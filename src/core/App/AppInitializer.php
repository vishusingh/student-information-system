<?php

class AppInitializer
{
	private static $app = null;
	private const ds = DIRECTORY_SEPARATOR;

	public static function getApp() :App
	{
		if (!self::$app instanceof App)
		{
			self::setUp();
		}
		return self::$app;
	}

	private static function setUp()
	{
		session_start();
		self::$app = new App(
			self::getRequest(),
			self::getConfiguration(),
			self::getDatabase(),
			self::getRootPath(),
			self::getWebpaths()
		);
	}

	private static function getConfiguration() :Configuration
	{
		return new Configuration(self::getConfig());
	}

	private static function getDatabase() :Database
	{
		$driver = self::getConfiguration()->get('driver');
		$host = self::getConfiguration()->get('host');
		$dbname = self::getConfiguration()->get('name');
		$username = self::getConfiguration()->get('username');
		$password =self::getConfiguration()->get('password');
		$port = self::getConfiguration()->get('port');
		$connectionString = "$driver:host=$host;dbname=$dbname;port=$port";
		return Database::getInstance($connectionString, $username, $password);
	}
	
	private static function getDataPath() :string
	{
		return self::getRootPath() . 'data' . self::ds;
	}

	private static function getRequest() :IRequest
	{
		return new Request($_POST, $_GET, $_COOKIE);
	}

	private static function getWebPaths() :array
	{
		return parse_ini_file(self::getDataPath() . 'webpaths.ini');
	}

	private static function getRootPath() :string
	{
		return __DIR__ . self::ds . '..' . self::ds . '..' . self::ds . '..' . self::ds;
	}

	private static function getConfig() :array
	{
		return parse_ini_file(self::getDataPath() . 'config.ini');
	}
}
