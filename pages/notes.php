<?php

	$section = 'notes';
	$notesResults = Database::getAll('notes');	
	require_once HEADER;
	require_once ROOTPATH . '/templates/notes.php';
	require_once FOOTER;

?>
