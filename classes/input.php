<?php 
	/**
	* @author Kidhoma Norman
	*/
	class Input
	{
		
		public static function cleanInput($data = null)
		{
			if ($data) 
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		}
	}
?>