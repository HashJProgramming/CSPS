<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'subject';
require('../functions/connection.php');

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'name', 'dt' => 1),
    array('db' => 'description', 'dt' => 2),
    array('db' => 'unit', 'dt' => 3),
    array('db' => 'created_at', 'dt' => 4),
    array(
        'db' => 'id',
        'dt' => 5,
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
                            <button class="dropdown-item" data-bs-target="#update" data-id="'.$row['id'].'" data-name="'.$row['name'].'" data-description="'.$row['description'].'" data-unit="'.$row['unit'].'" data-bs-toggle="modal">Update</button>
                            <button class="dropdown-item" data-bs-target="#remove" data-id="'.$row['id'].'" data-bs-toggle="modal">Delete</button>
                        </div>
                    </div>
                    </td>
        ';
        }
    )
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
