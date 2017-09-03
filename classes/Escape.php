<?php

	class Escape
	{		
		public static function data($data)
		{			
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;		
		}
	}

?>