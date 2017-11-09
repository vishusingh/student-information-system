<?php

	class Input
	{
		public static function exists(string $methodType) :bool
		{
			switch ($methodType)
			{
				case 'POST':
					return (!empty($_POST)) ? true : false;
					break;
				case 'GET':
					return (!empty($_GET)) ? true : false;
					break;
				default:
					return false;
					break;
			}
		}

		public static function get($formItem)
		{
			if(isset($_POST[$formItem]))
			{
				return Escape::input($_POST[$formItem]);
			}

			elseif(isset($_GET[$formItem]))
			{
				return Escape::input($_GET[$formItem]);
			}

			else
			{
				return '';
			}
		}
	}
