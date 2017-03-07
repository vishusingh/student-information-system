<?php 
	/**
	* @author Kidhoma Norman
	*/
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