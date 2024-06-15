<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $unit = $_POST['unit'];

    $sql_check = "SELECT * FROM `subject` WHERE name = :name AND id != :id";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':name', $name);
    $stmt_check->bindParam(':id', $id);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'subject already exists!');
    } else {
        $sql = "UPDATE `subject` SET `name` = :name, `description` = :description, `unit` = :unit WHERE `id` = :id";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':unit', $unit);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'subject updated successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update subject!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
