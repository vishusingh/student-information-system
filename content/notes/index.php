<?php

	$section = 'notes';

	require_once '../../core/init.php';

	$notesResults = databaseGetAll('notes');
	
	require_once header;

	require_once notesView;

	require_once footer;

?>