<?php 

	class Redirect
	{
		public static function to($location = null)
		{
			if ($location) 
			{
				header('location: ' . $location);
				exit();
			}
		}
	}
	
?>