<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <linkhref="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
           rel="stylesheet">
   <link rel="stylesheet" href="login.css">
   <link rel="stylesheet" href="resetpassword.css">
    <title>Reset Password</title>
    
</head>
<body>
    <div class="reset-password-container">
        <h2>Reset Password</h2>
        <hr class="border w-full border-[#00446b]">
        <h2>Your new password must be different
                from previously used password.</h2>
        <form action="Dashboard.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="new_password" placeholder="New Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" class="continue-button">Continue</button>
        </form>
    </div>
</body>
</html>