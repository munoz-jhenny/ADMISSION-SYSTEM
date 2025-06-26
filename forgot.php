<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="src/css/forgotpassword.css">
</head>
<body>
    <div class="otp-container">
        <img src="src/img/logo-sta.png" alt="Logo" class="logo">
        <h1>Forgot Password</h1>
        <p>Enter your registered email:</p>
        
        <form action="dashboard/admin/authentication//admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        <input type="text" name="email" placeholder="Enter Email"><br>
       <a href="forgot.php" class="forgot.php"></a>
        <button type="submit" name="btn-verify">Send Reset Link</button>
    </div>

</body>
</html>