<?php
session_start();
require_once __DIR__ . "/database/dbconnection.php";
require_once __DIR__ . "/config/settings-configuration.php";

if (isset($_SESSION["userSession"])) {
    echo "<script>alert('User is already logged in.'); window.location.href = './dashboard/admin/index.php';</script>";
    exit;
}

if (!isset($_GET['tokencode']) || !isset($_GET['id'])) {
    echo "<script>alert('Missing token or ID.'); window.location.href = 'index.php';</script>";
    exit;
}

$db = new Database();
$pdo = $db->dbConnection();

$stmt = $pdo->prepare("SELECT * FROM user WHERE id = :id");
$stmt->execute([":id" => $_GET['id']]);

if ($stmt->rowCount() == 0) {
    echo "<script>alert('Invalid Link.'); window.location.href = 'index.php';</script>";
    exit();
}

$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_GET['tokencode'] !== $admin['reset_token']) {
    echo "<script>alert('Invalid or expired token.'); window.location.href = 'forgot-password.php';</script>";
    exit;
}

// CSRF token generator
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

$token = $_GET['tokencode'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="icon" type="image/png" href="src/img/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="src/js/eye_icon.js"></script>
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div class="container">
        <h2>Reset Password</h2>
        <form method="POST" action="">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

            <label for="new_password">Enter your new password</label><br>
            <div class="password-container">
                <input type="password" id="resetPassword" name="new_password" placeholder="Enter New Password" required>
                <i id="toggleResetPassword" class="fa-solid fa-eye toggle-password"></i>
            </div>
            <button type="submit" name="btn-reset-password">Reset Password</button>
        </form>
    </div>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-reset-password'])) {
    require_once __DIR__ . "/dashboard/admin/authentication/admin-class.php";

    $csrf_token = $_POST['csrf_token'];
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];

    $adminObj = new ADMIN();
    $adminObj->resetPassword($token, $new_password, $csrf_token);
}
?>