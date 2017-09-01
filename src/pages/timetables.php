<?php

	$section = 'timeTables';

	requireAuth();

	$timeTableResults = Database::getAll('timetables');

	require_once HEADER;

	require_once ROOTPATH . '/src/templates/timetables.php';

	require_once FOOTER;

?>