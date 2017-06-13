<?php

	class Input
	{

		public static function exists($type = 'POST')
		{

			switch ($type) 
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
			
			if (isset($_POST[$formItem])) 
			{
				
				return Escape::data($_POST[$formItem]);

			}

			elseif (isset($_GET[$formItem])) 
			{

				return Escape::data($_GET[$formItem]);

			}

			else
			{

				return '';

			}

		}

	}

?>