<?php
session_start();

// Sample hardcoded username and password (for demo purposes)
$correct_email = ['email'];
$correct_password = ['password'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];

    if ($username == $correct_username && $password == $correct_password) {
        // Login successful
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: Dashboard.php"); // Redirect to a dashboard page after successful login
        exit();
    } else {
        // Login failed
        echo "Invalid username or password!";
    }
}
?>