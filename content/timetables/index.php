<?php

	$section = 'timeTables';

	require_once '../../core/init.php';

	$timeTableResults = databaseGetAll('timetables');

	require_once header;

	require_once timetablesView;

	require_once footer;

?>