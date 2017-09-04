<?php

    $section = 'home';

    requireAuth();

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

    require_once HEADER;

    require_once ROOTPATH . '/templates/dashboard.php';

    require_once FOOTER;
              
?>