<?php

	class Index
	{		
		public static function home()
		{
			require_once View::renderTemplate('index');
		}
	}

?>