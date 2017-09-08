<?php
	class Config
	{
		public static function getOption(string $path = null)
		{
			if ($path)
			{
				$path = explode('/', $path);
				$config = CONFIG_OPTIONS[$path[0]];
				foreach ($path as $bit)
				{
					if (isset($config[$bit]))
					{
						$config = $config[$bit];
					}
				}
				return $config;
			}
			return false;
		}
	}
