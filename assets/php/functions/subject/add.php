<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $unit = $_POST['unit'];

    $sql_check = "SELECT * FROM `subject` WHERE name = :name";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':name', $name);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'subject already exists!');
    } else {
        $sql = "INSERT INTO `subject` (`name`, `description`, `unit`) 
                VALUES (:name, :description, :unit)";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':unit', $unit);
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'subject added successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to add subject!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
