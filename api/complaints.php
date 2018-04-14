<?php

require_once './db.php';

// DB table to use
$table = 'complaints';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = [
	['db' => 'title', 'dt' => 0],
	['db' => 'message', 'dt' => 1],
	['db' => 'creator', 'dt' => 2],
	[
		'db' => 'date_added',
		'dt' => 3,
		'formatter' => function($d)
		{
			return date( 'jS M y', strtotime($d));
		}
	]
];

require_once __DIR__ . DIRECTORY_SEPARATOR . 'SSP.php';
echo json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));
