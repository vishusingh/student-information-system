<?php

	require_once '../core/init.php';

    if (User::logout()) 
    {

    	Redirect::to('/login/');
    	
    }
    
?>
