<?php

	$section = 'notes';

	require_once '../../core/init.php';

	$notesResults = Database::getInstance()->getAll('notes')->results();
	
	require_once header;

	require_once notesView;

	require_once footer;

?>