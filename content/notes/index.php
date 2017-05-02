<?php

	$section = 'notes';

	require_once '../../core/init.php';

	$results = results('SELECT * FROM notes');
	
	require_once header;

	require_once notesView;

	require_once footer;

?>