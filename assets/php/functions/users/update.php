<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
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
        $response = array('status' => 'error', 'message' => 'User already exists!');
    } else {
        $sql = "UPDATE `users` SET `name` = :name, `username` = :username, `password` = :password WHERE `id` = :id";

        $password = password_hash($password, PASSWORD_DEFAULT);        
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'User updated successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update user!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
