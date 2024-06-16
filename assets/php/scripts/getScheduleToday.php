<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'today_schedule_view';
require('../functions/connection.php');

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'block_name', 'dt' => 1),
    array('db' => 'course_name', 'dt' => 2),
    array('db' => 'subject_name', 'dt' => 3),
    array('db' => 'room_name', 'dt' => 4),
    array('db' => 'teacher_name', 'dt' => 5),
    array('db' => 'days', 'dt' => 6),
    array(
        'db' => 'time_start',
        'dt' => 7,
        'formatter' => function ($d, $row) {
            return date('h:i A', strtotime($d));
        }
    ),
    array(
        'db' => 'time_end',
        'dt' => 8,
        'formatter' => function ($d, $row) {
            return date('h:i A', strtotime($d));
        }
    ),
    array('db' => 'created_at', 'dt' => 9),
);


// SQL server connection information
$sql_details = array(
    'user' => $username,
    'pass' => $password,
    'db'   => $database,
    'host' => $host
);

require('ssp.class.php');

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
