<?php
// Configuration
$db_host = 'localhost';
$db_email = '';
$db_password = '';
$db_name = 'user';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check if email and password exist in database
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Email and password are correct, redirect to dashboard.php
    header('Location: dashboard.php');
    exit;
} else {
    // Email and password are incorrect, redirect back to login page
    header('Location: index.php?error=invalid_credentials');
    exit;
}

// Close connection
$conn->close();
?>