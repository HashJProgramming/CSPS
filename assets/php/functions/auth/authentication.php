<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)
$localIP = getHostByName(getHostName());
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: ./index.php');
}
?>
