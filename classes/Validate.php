<?php
	/**
	* @author Kidhoma Norman
	*/
	class Validate
	{
		
		public static function check($username, $password)
		{
			if (!empty($username) && !empty($password)) 
			{
				return true;
			}
		}
	}

?>