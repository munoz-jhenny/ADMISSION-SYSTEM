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