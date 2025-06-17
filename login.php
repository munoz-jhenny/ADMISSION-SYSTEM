<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPAD Admission System</title>
    <link rel="stylesheet" href="src/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section with Background Image -->
    <header>
        <div class="header-container">
            <img src="src/img/logo-sta.png" alt="TUPAD Logo" class="logo">
            <h1 class="header-title">TUPAD ADMISSION SYSTEM</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="about-us.php">About Us</a>
                <a href="contact-us.php">Contact Us</a>
                <a href="admission.php">Admission</a>
                <a href="login.php" class="active">Log In</a>
            </nav>
        </div>
    </header>
    <main>
        <!-- LOGIN MODAL -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <img src="src/img/logo-sta.png" alt="Barangay Logo" class="modal-logo">
        <span class="close" id="closeLogin">&times;</span>
        <h2>Login</h2>
        <form action="dashboard.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <a href="forgot.php" class="forgot.php">Forgot Password?</a>
            <button type="submit" name="btn-signin">LOG IN</button>
        </form>
    </div>
</div>

<!-- SIGNUP MODAL -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <img src="src/img/logo-sta.png" alt="Barangay Logo" class="modal-logo">
        <span class="close" id="closeSignup">&times;</span>
        <h2>Sign Up</h2>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="btn-signup">SIGN UP</button>
        </form>
    </div>
</div>

<script src="src/js/index.js"></script>
    </main>
   
    
    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <p class="footer-main">Smart TUPAD Admission System | Powered by Digital Innovation<br>Make TUPAD Admission Simple, Fair, and Fast</p>
            <div class="footer-links">
                <p>PESO SANTA RITA, PAMPANGA</p>
                <p>pesosantaritapamp.gov.ph</p>
            </div>
        </div>
    </footer>
</body>
</html>