<?php
include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="src/css/otp.css">
</head>
<body>
    <div class="otp-container">
        <img src="src/img/logo-sta.png" alt="Logo" class="logo">
        <h1>OTP Verification</h1>
        <p>Please enter the OTP sent to your email.</p>
        
        <form action="dashboard/admin/authentication//admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        <input type="number" name="otp" placeholder="Enter OTP" required><br>
            <a href="login.php" class="login.php"></a>
        <button type="submit" name="btn-verify">VERIFY</button>
    </div>
    
</body>
</html>