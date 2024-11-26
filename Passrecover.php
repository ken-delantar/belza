<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Database connection
    $conn = new mysqli("localhost", "root", "", "users");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(50));
        $expiry_time = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Update user with reset token and expiration time
        $update_sql = "UPDATE users SET reset_token = ?, token_expire = ? WHERE email = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("sss", $token, $expiry_time, $email);
        $update_stmt->execute();

        // Send reset link via email
        $reset_link = "http://yourdomain.com/reset.html?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Click here to reset your password: " . $reset_link;
        $headers = "From: no-reply@yourdomain.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "Password reset link has been sent to your email.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Email not found.";
    }

    $conn->close();
}
?>
