<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TUPAD Admission System</title>
  <link rel="stylesheet" href="src/css/admission.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- Header Section -->

  <div class="top-bar"></div>
  <header>
    <div class="header-container">
      <img src="src/img/logo-sta.png" alt="TUPAD Logo" class="logo" />
      <h1 class="header-title">TUPAD ADMISSION SYSTEM</h1>
    </div>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="about-us.php">About Us</a>
    <a href="contact-us.php">Contact Us</a>
    <a href="admission.php" class="active">Admission</a>
    <a href="login.php">Log In</a>
  </nav>

  <form class="admission-form" action="dashboard/admin/submit-application.php" method="POST" enctype="multipart/form-data">
    <!-- Contact Info -->
    <section class="form-section">
      <h2 class="section-title">Contact Information<span class="required">*</span></h2>
      <div class="form-group"><input type="text" name="full_name" placeholder="Enter your Name" required /></div>
      <div class="form-group"><input type="text" name="address" placeholder="Full Address" required /></div>
      <div class="form-row">
        <label for="filterBarangay" class="visually-hidden">Barangay</label>
        <select id="filterBarangay" name="barangay" class="form-select form-select-sm" required>
          <option value="">Select Barangay</option>
          <option value="Becuran">Becuran</option>
          <option value="Dila-dila">Dila-dila</option>
          <option value="San Agustin">San Agustin</option>
          <option value="San Basilio">San Basilio</option>
          <option value="San Isidro">San Isidro</option>
          <option value="San Jose">San Jose</option>
          <option value="San Juan">San Juan</option>
          <option value="San Matias">San Matias</option>
          <option value="Santa Monica">Santa Monica</option>
          <option value="San Vicente">San Vicente</option>
        </select>

        <div class="form-group"><input type="date" name="birth_date" placeholder="Date of Birth" required /></div>
        <div class="form-group"><input type="text" name="place_of_birth" placeholder="Place of Birth" required /></div>
      </div>
      <div class="form-group"><input type="tel" name="phone_number" placeholder="Phone No." required /></div>
    </section>

    <!-- Employment Status -->
    <section class="form-section">
      <h2 class="section-title">Employment Status<span class="required">*</span></h2>
      <div class="form-group">
        <select name="employment_status" required>
          <option value="" disabled selected>Employment Status</option>
          <option>Unemployed</option>
          <option>Underemployed</option>
          <option>Self-employed</option>
        </select>
      </div>
      <div class="form-group">
        <select name="income_level" required>
          <option value="" disabled selected>Income level*</option>
          <option>Below minimum wage</option>
          <option>Minimum wage</option>
          <option>Above minimum wage</option>
        </select>
      </div>
      <div class="form-group"><input type="text" name="income_amount" placeholder="Indicate the amount" required /></div>
    </section>

    <!-- Upload Section -->
    <section class="form-section upload-row">
      <div class="upload-group">
        <label for="id">Valid ID</label>
        <span class="sub-label">(Photocopy)</span>
        <label class="custom-upload">
          <input type="file" name="valid_id" id="id" accept="image/*" />
          Upload File
        </label>
      </div>

      <div class="upload-group">
        <label for="certificate">Certificate of Low Income</label>
        <label class="custom-upload">
          <input type="file" name="certificate_of_low_income" id="certificate" accept="image/*" />
          Upload File
        </label>
      </div>

      <div class="upload-group">
        <label for="signature">Three (3) Specimen Signature</label>
        <label class="custom-upload">
          <input type="file" name="specimen_signature[]" id="signature" accept="image/*" />
          Upload File
        </label>
      </div>
    </section>

    <button type="submit" class="submit-btn">Submit</button>
  </form>


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