<?php

	// Web hooks code to automatically pull whenever a push request occurs on github
	if (!empty($_POST)) 
	{

		shell_exec('git pull');
		
	}

?>