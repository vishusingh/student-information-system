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
				UPLOAD_ERR_OK => 'Your file was uploaded successfuly',
				UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
				UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
				UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded.',
				UPLOAD_ERR_NO_FILE => 'No file was uploaded.',
				UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder. Introduced in PHP 5.0.3.',
				UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk. Introduced in PHP 5.1.0.',
				UPLOAD_ERR_EXTENSION => 'upload error extension'
				);

	}

?>