<?php

require_once '../connection.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (isset($_POST['remember'])) {
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
    } else {
        setcookie('username', '', time() - 3600, "/");
        setcookie('password', '', time() - 3600, "/");
    }

    if (empty($username) || empty($password)) {
        $response = array('status' => 'error', 'message' => 'Please fill in all fields!');
        echo json_encode($response);
        exit();
    }
    
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $stmt->fetch()['role'];
        $_SESSION['authenticated'] = true;
        $response = array('status' => 'success', 'message' => 'User authenticated successfully!');
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid username or password!');
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['authenticated'] = true;
        $response = array('status' => 'success', 'message' => 'User authenticated successfully!');
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid username or password!');
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
