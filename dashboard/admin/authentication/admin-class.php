<?php
session_start();
require_once __DIR__ . '/../../../database/dbconnection.php';
require_once __DIR__ . '/../../../config/settings-configuration.php';
require_once __DIR__ . '/../../../src/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ADMIN
{
    private $conn;
    private $settings;
    private $smtp_email;
    private $smtp_password;

    public function __construct()
    {
        $this->settings = new SystemConfig();
        $this->smtp_email = $this->settings->getSmtpEmail();
        $this->smtp_password = $this->settings->getSmtpPassword();

        $database = new Database();
        $this->conn = $database->dbConnection();

        // 🛠️ Check and add missing columns for password reset (reset_token, token_expiry)
        $this->ensurePasswordResetColumnsExist();
    }

    public function sendOtp($otp, $email)
    {
        if ($email == NULL) {
            echo "<script>alert('No email found'); window.location.href = '../../../';</script>";
            exit;
        } else {
            $stmt = $this->runQuery("SELECT * FROM user WHERE email = :email");
            $stmt->execute(array(":email" => $email));
            $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() > 0) {
                echo "<script>alert('Email already taken. Please try another one'); window.location.href = '../../../';</script>";
                exit;
            } else {
                $_SESSION['OTP'] = $otp;

                $subject = "OTP VERIFICATION";
                $message = "
                <!DOCTYPE html>
                <html>
                <head>
                    <meta charset='UTF-8'>
                    <title>OTP Verification</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color:#f5f5f5;
                            margin: 0;
                            padding: 0;
                        }

                        .container {
                            max-width: 600px;
                            margin: 0 auto;
                            padding: 30px;
                            background-color: #ffffff;
                            border-radius: 4px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        }

                        h1{
                            color:#333333;
                            font-size: 24px;
                            margin-bottom: 20px;
                        }

                        p {
                            color: #666666;
                            font-size: 16px;
                            margin-bottom: 10px;
                        }

                        .button {
                            display: inline-block;
                            padding: 12px 24px;
                            background-color: #0088cc;
                            color: #ffffff;
                            text-decoration: none;
                            border-radius: 4px;
                            font-size: 16px;
                            margin-top: 20px;
                        }

                        .logo {
                            display: block;
                            text-align:  center;
                            margin-bottom: 30px;
                        }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='logo'>
                            <img src='cid:logo' alt='Logo' width='150'>
                        </div>
                        <h1>OTP Verification</h1>
                        <p>Hello, $email</p>
                        <p>Your OTP is: $otp</p>
                        <p>If you didn't request an OTP, please ignore this email.</p>
                        <p>Thank you!</p>
                    </div>
                </body>
                </html>";

                $this->send_email($email, $message, $subject, $this->smtp_email, $this->smtp_password);
                echo "<script>alert('We sent the OTP to $email'); window.location.href = '../../../verify-otp.php';</script>";
            }
        }
    }

    public function verifyOTP($username, $email, $password, $tokencode, $otp, $csrf_token)
    {
        if ($otp == $_SESSION['OTP']) {
            unset($_SESSION['OTP']);



            $subject = "VERIFICATION SUCCESS";
            $message = "
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <title>Verification Success</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color:#f5f5f5;
                        margin: 0;
                        padding: 0;
                    }
    
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 30px;
                        background-color: #ffffff;
                        border-radius: 4px;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }
    
                    h1 {
                        color:#333333;
                        font-size: 24px;
                        margin-bottom: 20px;
                    }
    
                    p {
                        color: #666666;
                        font-size: 16px;
                        margin-bottom: 10px;
                    }
    
                    .logo {
                        display: block;
                        text-align: center;
                        margin-bottom: 30px;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='logo'>
                        <img src='cid:logo' alt='Logo' width='150'>
                    </div>
                    <h1>Welcome</h1>
                    <p>Hello, <strong>$email</strong></p>
                    <p>Welcome to Our System</p>
                    <p>If you did not sign up for an account, you can safely ignore this email.</p>
                    <p>Thank you!</p>
                </div>
            </body>
            </html>";

            $this->send_email($email, $message, $subject, $this->smtp_email, $this->smtp_password);
            echo "<script>alert('Verification successful! Thank you for verifying your email.'); window.location.href = '../../../../';</script>";

            unset($_SESSION['not_verify_username']);
            unset($_SESSION['not_verify_email']);
            unset($_SESSION['not_verify_password']);

            $this->addAdmin($csrf_token, $username, $email, $password);
        } else if ($otp == NULL) {
            echo "<script>alert('No OTP Found'); window.location.href = '../../../verify-otp.php';</script>";
            exit;
        } else {
            echo "<script>alert('It appears that the OTP you entered is invalid'); window.location.href = '../../../../verify-otp.php';</script>";
            exit;
        }
    }

    public function addAdmin($csrf_token, $username, $email, $password)
    {
        $stmt = $this->runQuery("SELECT * FROM user WHERE email = :email");
        $stmt->execute(array(":email" => $email));

        if ($stmt->rowCount() > 0) {
            echo "<script>alert('Email already exist.'); window.location.href = '../../../';</script>";
            exit;
        }

        if (!isset($csrf_token) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
            echo "<script>alert('INVALID CSRF Token.'); window.location.href = '../../../';</script>";
            exit;
        }

        unset($_SESSION['csrf_token']);

        $hash_password = md5($password);

        $stmt = $this->runQuery('INSERT INTO user (username, email, password, status) VALUES (:username, :email, :password, :status)');
        $exec = $stmt->execute(array(
            ":username" => $username,
            ":email" => $email,
            ":password" => $hash_password,
            ":status" => "active"
        ));

        if ($exec) {
            echo "<script>alert('Admin Added Successfully.'); window.location.href = '../../../../';</script>";
            exit;
        } else {
            echo "<script>alert('Error Adding Admin.'); window.location.href = '../../../';</script>";
            exit;
        }
    }

    public function adminSignin($email, $password, $csrf_token)
    {
        try {
            if (!isset($csrf_token) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
                echo "<script>alert('INVALID CSRF Token.'); window.location.href = '../../../';</script>";
                exit;
            }
            unset($_SESSION['csrf_token']);

            $stmt = $this->runQuery("SELECT * FROM user WHERE email = :email AND status = :status");
            $stmt->execute(array(":email" => $email, ":status" => "active"));

            if ($stmt->rowCount() == 1) {
                $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($userRow['status'] === "active") {
                    if ($userRow['password'] === md5($password)) {

                        $activity = "Has Successfully Signed In";
                        $user_id = $userRow['id'];
                        $this->logs($activity, $user_id);

                        $_SESSION['adminSession'] = $user_id;

                        echo "<script>alert('Welcome!'); window.location.href = '../';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Password is incorrect'); window.location.href = '../../../login.php';</script>";
                        exit;
                    }
                } else {
                    echo "<script>alert('Entered Email is not verified'); window.location.href = '../../../login.php';</script>";
                    exit;
                }
            } else {
                echo "<script>alert('No account found'); window.location.href = '../../../login.php';</script>";
                exit;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function adminSignout()
    {
        unset($_SESSION['adminSession']);
        echo "<script>alert('Sign Out Successfully'); window.location.href = '../../../';</script>";
        exit;
    }

    private function ensurePasswordResetColumnsExist()
    {
        try {
            // Check if 'reset_token' column exists
            $stmt = $this->conn->query("SHOW COLUMNS FROM user LIKE 'reset_token'");
            $resetTokenExists = $stmt->rowCount() > 0;

            $stmt = $this->conn->query("SHOW COLUMNS FROM user LIKE 'token_expiry'");
            $tokenExpiryExists = $stmt->rowCount() > 0;

            if (!$resetTokenExists) {
                $this->conn->exec("ALTER TABLE user ADD reset_token VARCHAR(255) DEFAULT NULL");
            }

            if (!$tokenExpiryExists) {
                $this->conn->exec("ALTER TABLE user ADD token_expiry DATETIME DEFAULT NULL");
            }
        } catch (PDOException $e) {
            error_log("Schema check failed: " . $e->getMessage());
        }
    }

    public function send_email($to, $message, $subject, $smtp_email, $smtp_password)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $smtp_email;      // FIXED: use dynamic
            $mail->Password = $smtp_password;   // FIXED: use dynamic
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($smtp_email, 'System');  // FIXED: dynamic from
            $mail->addAddress($to);
            $mail->isHTML(true); // FIXED: make email HTML if it contains HTML
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
        } catch (Exception $e) {
            error_log("Mailer Error: " . $mail->ErrorInfo);
        }
    }



    public function logs($activity, $user_id)
    {
        $stmt = $this->runQuery('INSERT INTO logs (activity, user_id) VALUES (:activity, :user_id)');
        $stmt->execute(array(":activity" => $activity, ":user_id" => $user_id));
    }

    public function isUserLoggedIn()
    {
        if (isset($_SESSION['adminSession'])) {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function forgotPassword($email, $csrf_token)
    {
        if (!isset($csrf_token) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
            echo "<script>alert('Invalid CSRF token.'); window.location.href = '../../../forgot-password.php';</script>";
            exit;
        }
        unset($_SESSION['csrf_token']);

        // Check if the email exists
        $stmt = $this->runQuery("SELECT * FROM user WHERE email = :email");
        $stmt->execute(array(":email" => $email));
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 1 && isset($userRow['id'])) { // Check that user exists
            $user_id = $userRow['id'];

            // Generate a secure token
            $token = bin2hex(random_bytes(32));
            $tokenExpiry = date("Y-m-d H:i:s", strtotime('+30 seconds'));

            // Update the user's token in the database
            $updateStmt = $this->runQuery("UPDATE user SET reset_token = :reset_token, token_expiry = :token_expiry WHERE email = :email");
            $updateStmt->execute(array(
                ":reset_token" => $token,
                ":token_expiry" => $tokenExpiry,
                ":email" => $email
            ));

            $resetLink = "http://localhost/admission-main/reset-password.php?id=$user_id&tokencode=$token";


            $subject = "Password Reset Request";
            $message = "<html><body><p>Password reset link: <a href='$resetLink'>Reset Password</a></p></body></html>";

            $this->send_email($email, $message, $subject, $this->smtp_email, $this->smtp_password);

            echo "<script>alert('A password reset link has been sent to your email.'); window.location.href = '../../../login.php';</script>";
        } else {
            echo "<script>alert('No account found with that email address.'); window.location.href = '../../../forgot-password.php';</script>";
        }
    }




    public function resetPassword($token, $new_password, $csrf_token)
    {

        if (!isset($csrf_token) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
            echo "<script>alert('Invalid CSRF token.'); window.location.href = '../../../reset-password.php?token=$token'; </script>";
            exit;
        }
        unset($_SESSION['csrf_token']);


        // Retrieve user with the provided token
        $stmt = $this->runQuery("SELECT * FROM user WHERE reset_token = :reset_token AND token_expiry >= :current_time");
        $stmt->execute(array(
            ":reset_token" => $token,
            ":current_time" => date("Y-m-d H:i:s")
        ));
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 1) {
            $hash_password = md5($new_password);
            $updateStmt = $this->runQuery("UPDATE user SET password = :password, reset_token = NULL, token_expiry = NULL WHERE reset_token = :reset_token");
            $updateStmt->execute(array(
                ":password" => $hash_password,
                ":reset_token" => $token
            ));
            echo "<script>alert('Your password has been successfully reset. You can now log in with your new password.'); window.location.href = '/admission-main/login.php';</script>";
            exit;
        } else {
            echo "<script>alert('Invalid or expired token. Please request a new password reset.'); window.location.href = '../../../forgot-password.php';</script>";
            exit;
        }
    }
}

if (isset($_POST['btn-forgot-password'])) {
    $csrf_token = trim($_POST['csrf_token']);
    $email = trim($_POST['email']);

    $adminForgot = new ADMIN();
    $adminForgot->forgotPassword($email, $csrf_token);
}

if (isset($_POST['btn-reset-password'])) {
    $csrf_token = trim($_POST['csrf_token']);
    $token = trim($_POST['token']);
    $new_password = trim($_POST['new_password']);

    $adminReset = new ADMIN();
    $adminReset->resetPassword($token, $new_password, $csrf_token);
}
if (isset($_POST['btn-signup'])) {
    $_SESSION['not_verify_username'] = trim($_POST['username']);
    $_SESSION['not_verify_email'] = trim($_POST['email']);
    $_SESSION['not_verify_password'] = trim($_POST['password']);

    $email = trim($_POST['email']);
    $otp = rand(100000, 999999);

    $addAdmin = new ADMIN();
    $addAdmin->sendOtp($otp, $email);
}

if (isset($_POST['btn-verify'])) {
    $username =  $_SESSION['not_verify_username'];
    $email = $_SESSION['not_verify_email'];
    $password = $_SESSION['not_verify_password'];
    $csrf_token = trim($_POST['csrf_token']);

    $tokencode = md5(uniqid(rand()));
    $otp = trim($_POST['otp']);

    $adminVerify = new ADMIN();
    $adminVerify->verifyOTP($username, $email, $password, $tokencode, $otp, $csrf_token);
}

if (isset($_POST['btn-signin'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $csrf_token = trim($_POST['csrf_token']);

    $adminSignin = new ADMIN();
    $adminSignin->adminSignin($email, $password, $csrf_token);
}

if (isset($_GET['admin_signout'])) {
    $adminSignout = new ADMIN();
    $adminSignout->adminSignout();
}
