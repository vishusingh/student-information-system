<?php

	$section = 'upload';

	require_once '../../core/init.php'; 

	if (isset($_POST['submit'])) 
	{

		print_r($_FILES['file']);
		
	} 

	require_once header;

	require_once uploadsView;

	require_once footer;

?>