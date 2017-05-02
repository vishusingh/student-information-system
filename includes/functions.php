<?php

	// function to print class active for the navbars
	function classActive($page, $listItem)
	{

		return $page == $listItem ? print 'class="active"' : print '';
				
	}

	// Custom function to return results from database
	function results(string $queryString)
	{

		$results = array();

		$query = Database::getInstance()->query($queryString);

		if ($query->count() > 0)
		{
			
			$results = $query->results();

		}

		return $results;

	}

	function uploadErrors() : array
	{

		return	array(
		UPLOAD_ERR_OK 			=> 'Your file was uploaded successfuly',
		UPLOAD_ERR_INI_SIZE 	=> 'The uploaded file exceeds the upload max filesize.',
		UPLOAD_ERR_FORM_SIZE 	=> 'The uploaded file exceeds the form upload max filesize.',
		UPLOAD_ERR_PARTIAL 		=> 'The uploaded file was only partially uploaded. Try re-uploading the file again please.',
		UPLOAD_ERR_NO_FILE 		=> 'No file was uploaded.',
		UPLOAD_ERR_NO_TMP_DIR 	=> 'Upload Internal Server Error. Try again later.',
		UPLOAD_ERR_CANT_WRITE 	=> 'Upload Internal Server Error. Try again later.',
		UPLOAD_ERR_EXTENSION 	=> 'Upload Internal Server Error. Try again later.'
		);

	}

?>