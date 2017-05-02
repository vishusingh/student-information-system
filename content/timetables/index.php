<?php

	$section = 'timeTables';

	require_once '../../core/init.php';

	$timeTableResults = results('SELECT * FROM timetables');

	require_once header;

	require_once timetablesView;

	require_once footer;

?>