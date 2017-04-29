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

?>