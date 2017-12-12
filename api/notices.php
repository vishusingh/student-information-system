<?php

// DB table to use
$table = 'notices';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = [
	['db' => 'title', 'dt' => 0],
	['db' => 'creator', 'dt' => 1],
	[
		'db' => 'date_added',
		'dt' => 2,
		'formatter' => function( $d, $row )
		{
			return date( 'jS M y', strtotime($d));
		}
	],
	[
		'db' => 'id',
		'dt' => 3,
		'formatter' => function($id)
		{
			return "<a class='btn btn-info' href='/notices/view/$id'>View notice</a>";
		}
	]
];

// SQL server connection information
$sql_details = [
	'user' => 'root',
	'pass' => 'root',
	'db'   => 'sis',
	'host' => '127.0.0.1'
];
require_once __DIR__ . DIRECTORY_SEPARATOR . 'SSP.php';
echo json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));
