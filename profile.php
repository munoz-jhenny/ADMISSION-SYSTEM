<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/profile.css">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button" aria-label="Toggle Sidebar">
                    <i class="lni lni-grid-alt" aria-hidden="true"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="landlord_tenant_profile.php">TUPAD ADMISSION</a>
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
                    <li class="sidebar-item">
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
                <li class="sidebar-item active">
                    <a href="profile.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block"></form>
            </nav>

            <main class="content px-3 py-4">
                <section>
                    <h1>Profile</h1>
                    <form method="POST" action="" enctype="multipart/form-data" class="profile-form">
                        <div class="profile-image-section">
                            <img src="<?php echo htmlspecialchars($user['profile_image'] ?? 'default_profile.png'); ?>" alt="Profile Picture" class="profile-image">
                            <label for="profile_image" class="profile-label">Profile Picture:</label>
                            <input type="file" id="profile_image" name="profile_image" accept="image/*" class="input-file">
                        </div>

                        <div class="profile-info-left">
                            <label for="fullname" class="profile-label">Username:</label>
                            <input type="text" id="fullname" name="fullname" placeholder="Enter username" required class="input-text">

                            <label for="firstname" class="profile-label">First Name:</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Enter firstname" required class="input-text">

                            <label for="lastname" class="profile-label">Last Name:</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Enter lastname" required class="input-text">
                        </div>

                        <div class="profile-info-right">
                            <label for="birthday" class="profile-label">Birthday:</label>
                            <input type="date" id="birthday" name="birthday" value="<?php echo htmlspecialchars($user['birthday']); ?>" required class="input-date">

                            <label for="civil_status" class="profile-label">Civil Status:</label>
                            <select id="civil_status" name="civil_status" required class="input-select">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>

                            <label for="gender" class="profile-label">Gender:</label>
                            <select id="gender" name="gender" required class="input-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <button type="submit" class="submit-btn">Update Profile</button>
                        <br>
                       <a href="index.php" class="btn btn-danger out">Log Out</a>   
                        <br>
                    </form>
                </section>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="src/js/show.js"></script>
</body>
</html>
