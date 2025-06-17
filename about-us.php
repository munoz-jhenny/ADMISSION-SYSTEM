<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/about-us.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button" title="Toggle Sidebar" aria-label="Toggle Sidebar">
                    <i class="lni lni-grid-alt" aria-hidden="true"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">ADMISSION SYSTEM</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="landingpage.php" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="request.php" class="sidebar-link">
                        <i class="lni lni-pencil"></i>
                        <span>Request</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a href="about-us.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-comments"></i>
                        <span>About Us</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="contact.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-phone"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="help.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-question-circle"></i>
                        <span>Help Us</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="profile.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="main-content">
            <div class="about-container">
              <h1>ABOUT US</h1>
               <div class="scroll-section">
                <div class="section-box mission-box">
                <h2>MISSION</h2>
                 <p>
                Barangay Calangain is committed to fostering a peaceful, progressive, and inclusive
                community by promoting good governance, sustainable development, and active citizen participation.
                We strive to improve the quality of life for all residents through efficient public services,
                environmental stewardship, and programs that empower the youth, support livelihood opportunities.
                With unity and dedication, we aim to build a resilient barangay that thrives in harmony, faith,
                and shared prosperity.
                </p>
            </div>
              <div class="section-box vision-box">
                   <h2>VISION</h2>
                 <p>
                  Barangay Calangain is committed to:
                 <ul>
                  <li>Transparent and accountable governance for residents' welfare.</li>
                  <li>Sustainable development through livelihood, education, and environment.</li>
                  <li>Strengthening peace, order, and community safety.</li>
                  <li>Empowering youth in leadership and faith-driven service.</li>
                  </ul>
                 </p>
             </div>
          </div>
               </div>
      

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="src/js/show.js"></script>
    <script src="src/js/help.js"></script>
</body>
</html>
