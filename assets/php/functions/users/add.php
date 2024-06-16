<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if ($password !== $confirm_password) {
        $response = array('status' => 'error', 'message' => 'Password does not match!');
        echo json_encode($response);
        exit();
    }

    $sql_check = "SELECT * FROM `users` WHERE username = :username";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':username', $username);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'user already exists!');
    } else {
        
        $sql = "INSERT INTO `users` (`name`, `username`, `password`) 
                VALUES (:name, :username, :password)";

        $password = password_hash($password, PASSWORD_DEFAULT);        
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'user added successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to add user!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
