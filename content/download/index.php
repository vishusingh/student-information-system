<?php

	$section = 'download';

	require_once '../../core/init.php';

	$results = results('SELECT * FROM notes');
	
	require_once header;

	require_once downloadsView;

	require_once footer;

?>