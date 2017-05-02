<?php

    $section = 'home';

    require_once '../core/init.php';

    if (isset($_POST['submit'])) 
    {

    	$category = $_POST['category'];

    	$message = $_POST['message'];

    	$array = array($category, $message);

    	if (empty($category) || empty($message)) 
    	{

    		$errorList[] = 'Your must select category and fill in message';

    	}

    	else
    	{

    		$query = 'INSERT INTO complaints(category, message) VALUES(?, ?)';

    		if (Database::getInstance()->query($query, $array)) 
    		{

    			Redirect::to('/home/?status=complaitsuccess');

    		}

    		else
    		{

    			$errorList[] = "There was a problem inserting data in database";

    		}

    	}

    }

    require_once header;

    require_once homeView;

    require_once footer;
              
?>