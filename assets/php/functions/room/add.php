<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $floor = $_POST['floor'];
    $type = $_POST['type'];

    $sql_check = "SELECT * FROM `room` WHERE name = :name";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':name', $name);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'room already exists!');
    } else {
        $sql = "INSERT INTO `room` (`name`, `floor`, `type`) 
                VALUES (:name, :floor, :type)";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':floor', $floor);
        $stmt->bindParam(':type', $type);
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'room added successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to add room!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
