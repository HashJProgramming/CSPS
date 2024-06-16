<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'schedule_view';
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

    array('db' => 'block_id', 'dt' => 6),
    array('db' => 'course_id', 'dt' => 7),
    array('db' => 'subject_id', 'dt' => 8),
    array('db' => 'room_id', 'dt' => 9),
    array('db' => 'teacher_id', 'dt' => 10),

    array('db' => 'days', 'dt' => 11),
    array(
        'db' => 'time_start',
        'dt' => 12,
        'formatter' => function ($d, $row) {
            return date('h:i A', strtotime($d));
        }
    ),
    array(
        'db' => 'time_end',
        'dt' => 13,
        'formatter' => function ($d, $row) {
            return date('h:i A', strtotime($d));
        }
    ),
    array('db' => 'created_at', 'dt' => 14),
    array(
        'db' => 'id',
        'dt' => 15,
        'formatter' => function ($d, $row) {
            return '<td class="text-center">
                    <div class="dropdown">
                        <button
                        class="btn btn-primary dropdown-toggle"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        type="button"
                        >
                        Action
                        </button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" data-bs-target="#update" data-id="'.$row['id'].'" data-block-id="'.$row['block_id'].'" data-course-id="'.$row['course_id'].'" data-subject-id="'.$row['subject_id'].'" data-room-id="'.$row['room_id'].'" data-teacher-id="'.$row['teacher_id'].'" data-start-time="'.$row['time_start'].'" data-end-time="'.$row['time_end'].'" data-monday="'.$row['monday'].'" data-tuesday="'.$row['tuesday'].'" data-wednesday="'.$row['wednesday'].'" data-thursday="'.$row['thursday'].'" data-friday="'.$row['friday'].'" data-saturday="'.$row['saturday'].'" data-sunday="'.$row['sunday'].'" data-bs-toggle="modal">Update</button>
                            <button class="dropdown-item" data-bs-target="#remove" data-id="'.$row['id'].'" data-bs-toggle="modal">Delete</button>
                        </div>
                    </div>
                    </td>';
        }
    ),
    array('db' => 'monday', 'dt' => 16),
    array('db' => 'tuesday', 'dt' => 17),
    array('db' => 'wednesday', 'dt' => 18),
    array('db' => 'thursday', 'dt' => 19),
    array('db' => 'friday', 'dt' => 20),
    array('db' => 'saturday', 'dt' => 21),
    array('db' => 'sunday', 'dt' => 22)    
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
