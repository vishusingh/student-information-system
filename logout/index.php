<?php

	require_once '../core/init.php';

	User::logout();
    
    Redirect::to('/login/');

?>
