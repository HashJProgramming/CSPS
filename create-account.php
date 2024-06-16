<?php
include_once 'assets/php/functions/connection.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    header('Location: dashboard.php');
}


$checkSql = "SELECT * FROM users WHERE `role` = 'admin'";
$checkStmt = $db->prepare($checkSql);
$checkStmt->execute();
$existingUser = $checkStmt->fetch(PDO::FETCH_ASSOC);
if ($existingUser) {
    header('Location: index.php');
    exit;
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert data into database
    $insertSql = "INSERT INTO users (`name`, `username`, `password`, `role`) VALUES ('Administrator', :username, :password, 'admin')"; 
    $insertStmt = $db->prepare($insertSql);
    $insertStmt->bindParam(':username', $username);
    $insertStmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
    $insertStmt->execute();

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['role'] = $user['role'];
    $_SESSION['authenticated'] = true;

    header('Location: dashboard.php');

}

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Account - CSPS</title>
    <meta name="description" content="Class Schedule Plotting System">
    <link rel="icon" type="image/png" sizes="480x480" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean-icons.css">
    <style>
        body {
            background-color: #f8f9fa; /* Set background color */
        }

        .container {
            margin-top: 100px; /* Adjust top margin for centering */
        }

        form {
            background-color: #fff; /* Set form background color */
            padding: 20px; /* Add some padding */
            border-radius: 10px; /* Add border radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="container text-center"><img src="assets/img/print.png" width="90px">
                <h2 class="text-center">Create Account</h2>
                <p>Here you can create you administrator account</p>
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
</body>
</html>
