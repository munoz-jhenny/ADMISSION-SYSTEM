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
                <a href="home.php">Home</a>
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
                        class="google-map"
                        title="Location of Municipal Hall of Santa Rita, Pampanga"
                        aria-label="Map of Municipal Hall location">
                    </iframe>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <h3>Contact Us</h3>
                <p>Need help or have questions? Contact us and let's make TUPAD services smarter, faster, and more accessible for Sta. Rita.</p>
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

    <!-- Citizen Grievance Form -->
        <section id="grievance-form">
            <div class="card">
                <h2>Submit a Grievance</h2>
                <p>Please fill out this form to report issues with name verification, duplicate entries, or system errors.</p>
                
                <form>
                    <div class="form-group">
                        <label for="grievance-type" class="required">Grievance Type</label>
                        <select id="grievance-type" required aria-label="Select grievance type">
                            <option value="">Select an issue type</option>
                            <option value="name-verification">Name Verification Error</option>
                            <option value="duplicate">Duplicate Entry Issue</option>
                            <option value="system-error">System Bug/Error</option>
                            <option value="rejection">Unfair Rejection</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="applicant-id" class="required">Applicant ID or Name</label>
                        <input type="text" id="applicant-id" placeholder="Enter your TUPAD ID or full name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-email" class="required">Email Address</label>
                        <input type="email" id="contact-email" placeholder="example@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-phone">Phone Number (Optional)</label>
                        <input type="tel" id="contact-phone" placeholder="+63 912 345 6789">
                    </div>
                    
                    <div class="form-group">
                        <label for="description" class="required">Description of Issue</label>
                        <textarea id="description" placeholder="Please describe your issue in detail..." required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="file-upload">Attach Supporting Documents (Optional)</label>
                        <div class="file-upload">
                            <p>Drag and drop files here or click to browse</p>
                            <input type="file" id="file-upload" multiple class="file-input">
                            <button type="button" class="btn btn-primary file-upload-btn">Select Files</button>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit Grievance</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Status Tracker -->
        <section id="status-tracker">
            <div class="card">
                <h2>Grievance Status Tracker</h2>
                
                <div class="form-group">
                    <label for="tracking-number">Enter Grievance ID or Applicant Name</label>
                    <input type="text" id="tracking-number" placeholder="e.g. #TUPAD-2024-12345 or Juan Dela Cruz">
                    <button class="btn btn-primary track-btn">Track Status</button>
                </div>
                
                <div id="status-result" class="status-result">
                    <h3>Grievance ID: <span id="grievance-id">#TUPAD-2024-12345</span></h3>
                    <p><strong>Submitted On:</strong> <span id="submission-date">15 July 2024</span></p>
                    <p><strong>Current Status:</strong> <span class="status-badge status-in-progress">Under Review</span></p>
                    <p><strong>Assigned Officer:</strong> Officer Juan Dela Cruz</p>
                    <p><strong>Expected Resolution:</strong> <span id="resolution-date">22 July 2024</span></p>
                    
                    <h4 class="timeline-heading">Progress Timeline</h4>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">15 July 2024</div>
                            <div class="timeline-content">
                                <strong>Grievance Submitted</strong>
                                <p>Your complaint has been received by the system.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">16 July 2024</div>
                            <div class="timeline-content">
                                <strong>Under Review</strong>
                                <p>Officer Juan Dela Cruz has been assigned to your case.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">Pending</div>
                            <div class="timeline-content">
                                <strong>Resolution</strong>
                                <p>Your case is still being processed.</p>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="updates-heading">Updates</h4>
                    <div class="updates">
                        <div class="update-item">
                            <p><strong>System Update - 16 July 2024</strong></p>
                            <p>We have received your documents and are verifying your information with our records.</p>
                        </div>
                    </div>
                </div>
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

    <script src="src/js/status.js"></script>
    </footer>
</body>
</html>
