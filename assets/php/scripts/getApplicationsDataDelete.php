<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'applications';
require ('../functions/connection.php');

// Table's primary key
$primaryKey = 'id';

$searchType = $_POST['searchType'];
$searchValue = $_POST['searchValue'];

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'firstname', 'dt' => 1),
    array('db' => 'lastname', 'dt' => 2),
    array('db' => 'middlename', 'dt' => 3),
    array('db' => 'maidenname', 'dt' => 4),
    array('db' => 'birthdate', 'dt' => 5),
    array('db' => 'birthplace', 'dt' => 6),
    array('db' => 'email', 'dt' => 7),
    array('db' => 'civil', 'dt' => 8),
    array('db' => 'phone', 'dt' => 9),
    array('db' => 'zipcode', 'dt' => 10),
    array('db' => 'citizenship', 'dt' => 11),
    array('db' => 'sex', 'dt' => 12),
    array('db' => 'present_address', 'dt' => 13),
    array('db' => 'permanent_address', 'dt' => 14),
    array('db' => 'created_at', 'dt' => 15),
    array(
        'db' => 'id',
        'dt' => 15,
        'formatter' => function($d, $row) {
            return '<td class="text-center">
                <button class="btn btn-danger mx-1 mb-1" type="button" data-bs-target="#remove" data-bs-toggle="modal" data-id="'.$row['id'].'">Remove</button>
                </td>';
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

$where = "$searchType LIKE '%$searchValue%';";

require( 'ssp.class.php' );

echo json_encode(
    SSP::complex( $_POST, $sql_details, $table, $primaryKey, $columns,$where)
);
