<?php
// reset-password.php

// Start session
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
// Check if token is present
if(!isset($_GET['token'])){
    echo "<script>alert('No token provided.'); window.location.href = 'index.php';</script>";
    exit;
}

$token = $_GET['token'];

// Optionally, verify the token's existence and validity before showing the form
// This can also be handled in the resetPassword method
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="src/css/setpassword.css">
</head>
<body>
    <div class="otp-container">
        <img src="src/img/logo-sta.png" alt="Logo" class="logo">
        <h1>Reset Password</h1>
        
        <form action="dashboard/admin/authentication//admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        <input type="text" name="password" placeholder="Enter New Password" ><br>
        <input type="text" name="password" placeholder="Confirm New Password" ><br>
          <a href="password.php" class="password.php"></a>
        <button type="submit" name="btn-verify">Send Reset Link</button>
    </div>
    
</body>
</html>