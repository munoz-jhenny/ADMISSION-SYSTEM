<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TUPAD Admission System</title>
  <link rel="stylesheet" href="src/css/admission.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="header-container">
      <img src="src/img/logo-sta.png" alt="TUPAD Logo" class="logo" />
      <h1 class="header-title">TUPAD ADMISSION SYSTEM</h1>
      <nav>
        <a href="index.php">Home</a>
        <a href="about-us.php">About Us</a>
        <a href="contact-us.php">Contact Us</a>
        <a href="admission.php" class="active">Admission</a>
        <a href="login.php">Log In</a>
      </nav>
    </div>
  </header>

  <main class="admission-form">
    <!-- Contact Info -->
    <section class="form-section">
      <h2 class="section-title">Contact Information<span class="required">*</span></h2>
      <div class="form-group"><input type="text" placeholder="Enter your Name" required /></div>
      <div class="form-group"><input type="text" placeholder="Address" required /></div>
      <div class="form-row">
        <div class="form-group"><input type="date" placeholder="Date of Birth" required /></div>
        <div class="form-group"><input type="text" placeholder="Place of Birth" required /></div>
      </div>
      <div class="form-group"><input type="tel" placeholder="Phone No." required /></div>
    </section>

    <!-- Employment Status -->
    <section class="form-section">
      <h2 class="section-title">Employment Status<span class="required">*</span></h2>
      <div class="form-group">
        <select required>
          <option value="" disabled selected>Employment Status</option>
          <option>Unemployed</option>
          <option>Underemployed</option>
          <option>Self-employed</option>
        </select>
      </div>
      <div class="form-group">
        <select required>
          <option value="" disabled selected>Income level*</option>
          <option>Below minimum wage</option>
          <option>Minimum wage</option>
          <option>Above minimum wage</option>
        </select>
      </div>
      <div class="form-group"><input type="text" placeholder="Indicate the amount" required /></div>
    </section>

    <!-- Upload Section (3 boxes side-by-side) -->
    <section class="form-section upload-row">
      <div class="upload-group">
        <label for="id">Valid ID (Photocopy)</label>
        <input type="file" id="id" accept="image/*" />
      </div>
      <div class="upload-group">
        <label for="certificate">Certificate of Low Income</label>
        <input type="file" id="certificate" accept="image/*" />
      </div>
      <div class="upload-group">
        <label for="signature">Three (3) Specimen Signature</label>
        <input type="file" id="signature" accept="image/*" multiple />
      </div>
    </section>

    <button type="submit" class="submit-btn">Submit</button>
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
</body>
</html>
