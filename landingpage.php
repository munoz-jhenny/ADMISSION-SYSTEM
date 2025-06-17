<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/landingpage.css">
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
                <li class="sidebar-item active">
                    <a href="landingpage.php" class="sidebar-link" >
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
                <li class="sidebar-item">
                    <a href="profile.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">
                    <!-- Optional form -->
                </form>
            </nav>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="src/js/show.js"></script>
</body>
</html>
