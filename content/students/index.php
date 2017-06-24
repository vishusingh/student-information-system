<?php

	$page = 'admin';

	$section = 'students';

	require_once '../../core/init.php';

	requireAuth();

	require_once header;

	require_once studentsView;

	require_once footer;

?>