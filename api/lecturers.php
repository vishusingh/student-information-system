<?php

// DB table to use
$table = 'lecturers';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = [
	['db' => 'username', 'dt' => 0],
	['db' => 'email', 'dt' => 1],
	['db' => 'phone_number', 'dt' => 2],
	[
		'db' => 'joined',
		'dt' => 3,
		'formatter' => function( $d, $row )
		{
			return date( 'jS M y', strtotime($d));
		}
	],
	[
		'db' => 'username',
		'dt' => 4,
		'formatter' => function($id)
		{
			return "<a class='btn btn-info' href='/users/view/$id'>View profile</a>";
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
