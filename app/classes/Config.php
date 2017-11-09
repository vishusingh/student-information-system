<?php

	class Config
	{
		private static $configFile = ROOTPATH . DS . "config.ini";

		public static function get(string $path = null)
		{
			if ($path)
			{
				if (file_exists(self::$configFile))
				{
					$config = parse_ini_file(self::$configFile, true);
					$path = explode('/', $path);

					foreach ($path as $bit)
					{
						if(isset($config[$bit]))
						{
							$config = $config[$bit];
						}
						else
						{
							throw new Exception("Undefined offset $bit", 1);
						}
					}
					return $config;
				}
				throw new Exception("Configuration file does not exist in path " . self::$configFile, 1);
			}
			return null;
		}
	}
