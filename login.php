<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TUPAD Admission System</title>
  <link rel="stylesheet" href="src/css/login.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body>

  <!-- Top Bar -->
  <div class="top-bar"></div>

  <!-- Header -->
  <header>
    <div class="header-container">
      <img src="src/img/logo-sta.png" alt="TUPAD Logo" class="logo" />
      <h1 class="header-title">TUPAD ADMISSION SYSTEM</h1>
    </div>
  </header>

  <!-- Navigation -->
  <nav>
    <a href="index.php">Home</a>
    <a href="about-us.php">About Us</a>
    <a href="contact-us.php">Contact Us</a>
    <a href="admission.php">Admission</a>
    <a href="login.php" class="active">Log In</a>
  </nav>

  <!-- Main -->
  <main>
    <div class="container" id="container">

      <!-- Sign Up Form -->
      <div class="form-container sign-up-container">
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
          <h1>Sign Up</h1>
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?? ''; ?>">
          <input type="text" name="username" placeholder="Enter Username" required />
          <input type="email" name="email" placeholder="Enter Email" required />
          <input type="password" name="password" placeholder="Enter Password" required />
          <button type="submit" name="btn-signup">SIGN UP</button>
        </form>
      </div>

      <!-- Sign In Form -->
      <div class="form-container sign-in-container">
        <form action="dashboard.php" method="POST">
          <h1>Log In</h1>
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?? ''; ?>">
          <input type="email" name="email" placeholder="Enter Email" required />
          <input type="password" name="password" placeholder="Enter Password" required />
          <a href="forgot.php" class="forgot-link">Forgot Password?</a>
          <button type="submit" name="btn-signin">LOG IN</button>
        </form>
      </div>

      <!-- Overlay Panels -->
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Log In</h1>
            <p>Use your account to access the system.</p>
            <button class="ghost" id="signIn">Log In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Sign Up</h1>
            <p>Fill in the details to create your account.</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <p class="footer-main">Smart TUPAD Admission System | Powered by Digital Innovation<br>Make TUPAD Admission Simple, Fair, and Fast</p>
      <div class="footer-links">
        <p>PESO SANTA RITA, PAMPANGA</p>
        <p>pesosantaritapamp.gov.ph</p>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
    const container = document.getElementById('container');
    document.getElementById('signUp').addEventListener('click', () => {
      container.classList.add('right-panel-active');
    });
    document.getElementById('signIn').addEventListener('click', () => {
      container.classList.remove('right-panel-active');
    });
  </script>

</body>
</html>
