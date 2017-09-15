<?php

	class Redirect
	{
		public static function to(string $location = null) :void
		{
			if($location)
			{
				header('location: ' . $location);
				exit();
			}
		}
	}
