<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once './connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id']; 

    $sql = "DELETE FROM applications WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        $response = array('status' => 'success', 'message' => 'Application deleted successfully!');
    } else {
        $response = array('status' => 'error', 'message' => 'Failed to delete application!');
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $response = json_encode(array('status' => 'error', 'message' => 'Invalid request method!'));
}

echo json_encode($response);
