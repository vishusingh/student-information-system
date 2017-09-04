<?php

	$section = 'timeTables';
	requireAuth();
	$timeTableResults = Database::getAll('timetables');
	require_once HEADER;
	require_once ROOTPATH . '/templates/timetable.php';
	require_once FOOTER;

?>
