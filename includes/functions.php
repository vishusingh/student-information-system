<?php

	// function to print class active for the navbar
	function classActive($page, $listItem)
	{

		return $page == $listItem ? print 'class="active"' : print '';
				
	}

?>