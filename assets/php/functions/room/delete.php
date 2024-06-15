<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];

    $sql_check = "SELECT * FROM `room` WHERE `id` = :id";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':id', $id);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $sql = "DELETE FROM `room` WHERE `id` = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'room deleted successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to delete room!');
        }
    } else {
        $response = array('status' => 'error', 'message' => 'room does not exist!');
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
