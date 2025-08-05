<?php
session_start();

require_once __DIR__."/config/settings-configuration.php";

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if(isset($_SESSION["userSession"])) {
    echo "<script>alert('user is log in.'); window.location.href = './dashboard/admin/index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="icon" type="image/png" href="src/img/logo1.png">
    <link rel="stylesheet" href="src/css/forgot-password.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="dashboard/admin/authentication/admin-class.php">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <h2>Forgot Password</h2>
            <input class="email" type="email" name="email" required placeholder="Enter Registered Email">
            <button type="submit" name="btn-forgot-password">Send Reset Link</button>
        </form>
    </div>
</body>
</html>
