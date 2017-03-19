<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';
    if (User::logout()) 
    {
    	Redirect::to('login.php');
    }
    
?>
