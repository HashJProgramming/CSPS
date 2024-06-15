<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $floor = $_POST['floor'];
    $type = $_POST['type'];

    $sql_check = "SELECT * FROM `room` WHERE name = :name AND id != :id";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':name', $name);
    $stmt_check->bindParam(':id', $id);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'room already exists!');
    } else {
        $sql = "UPDATE `room` SET `name` = :name, `floor` = :floor, `type` = :type WHERE `id` = :id";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':floor', $floor);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'room updated successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update room!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
