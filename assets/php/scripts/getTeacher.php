<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'teacher_view';
require('../functions/connection.php');

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'firstname', 'dt' => 1),
    array('db' => 'lastname', 'dt' => 2),
    array('db' => 'middlename', 'dt' => 3),
    array('db' => 'suffix', 'dt' => 4),
    array('db' => 'birthdate', 'dt' => 5),
    array('db' => 'sex', 'dt' => 6),
    array('db' => 'region', 'dt' => 7),
    array('db' => 'province', 'dt' => 8),
    array('db' => 'municipality', 'dt' => 9),
    array('db' => 'barangay', 'dt' => 10),
    array('db' => 'address', 'dt' => 11),
    array('db' => 'phone', 'dt' => 12),
    array('db' => 'created_at', 'dt' => 13),
    array(
        'db' => 'id',
        'dt' => 14,
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
                            <button class="dropdown-item" data-bs-target="#update" data-id="'.$row['id'].'" data-firstname="'.$row['firstname'].'" data-lastname="'.$row['lastname'].'" data-middlename="'.$row['middlename'].'" data-suffix="'.$row['suffix'].'" data-birthdate="'.$row['birthdate'].'" data-sex="'.$row['sex'].'" data-region="'.$row['region'].'" data-province="'.$row['province'].'" data-municipality="'.$row['municipality'].'" data-barangay="'.$row['barangay'].'" data-address="'.$row['address'].'" data-phone="'.$row['phone'].'" data-bs-toggle="modal">Update</button>
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
