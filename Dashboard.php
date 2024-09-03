<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

echo "Welcome to your dashboard, " . $_SESSION['username'] . "!";
?>

<a href="logout.php">Logout</a>
