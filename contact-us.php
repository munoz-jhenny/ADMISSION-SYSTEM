<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPAD Admission System</title>
    <link rel="stylesheet" href="src/css/contact-us.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section with Background Image -->

    <div class="top-bar"></div>
    <header>
        <div class="header-container">
            <img src="src/img/logo-sta.png" alt="TUPAD Logo" class="logo" />
            <h1 class="header-title">TUPAD ADMISSION SYSTEM</h1>
        </div>
    </header>

            <nav>
                <a href="index.php">Home</a>
                <a href="about-us.php">About Us</a>
                <a href="contact-us.php" class="active">Contact Us</a>
                <a href="admission.php">Admission</a>
                <a href="login.php">Log In</a>
            </nav>

    <!-- Contact Section -->
    <main>
        <section class="contact-section">

            <div class="contact-info">
                <div class="contact-location">
                    <h3>Location</h3>
                    <p>Municipal Hall Building, San Jose Street, Barangay San Jose, Sta. Rita, Pampanga, Philippines</p>
                    <p>Office Hours:<br>Monday – Friday, 8:00 AM – 5:00 PM</p>
                </div>
                <div class="contact-map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.565741716421!2d120.61565407472058!3d14.996369684441008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396edb6408fd4b9%3A0x6052447cbcb0240d!2sMunicipal%20Hall%20of%20Santa%20Rita%2C%20Pampanga!5e0!3m2!1sen!2sph!4v1720322357485!5m2!1sen!2sph" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

            <div class="contact-form-wrapper">
                <h3>Contact Us</h3>
                <p>Need help or have questions? Contact us and let’s make TUPAD services smarter, faster, and more accessible for Sta. Rita.</p>
                <form action="#" method="POST" class="contact-form">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="surname" placeholder="Surname" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" rows="5" placeholder="Message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
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
