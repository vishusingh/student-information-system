<?php

	$section = 'timeTables';

	require_once '../../core/init.php';

	requireAuth();

	$timeTableResults = Database::getAll('timetables');

	require_once header;

	require_once timetablesView;

	require_once footer;

?>