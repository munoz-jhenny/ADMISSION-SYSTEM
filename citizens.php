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
    <link rel="stylesheet" href="src/css/citizens.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button" title="Toggle Sidebar" aria-label="Toggle Sidebar">
                    <i class="lni lni-grid-alt" aria-hidden="true"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Admission System</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="dashboard.php" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="applicants.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Applicants</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a href="citizens.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-comments"></i>
                        <span>Citizens</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="audit.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-phone"></i>
                        <span>Audit Reports</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="services.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-question-circle"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="management.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-user"></i>
                        <span>Management</span>
                    </a>
                </li>
            </ul>
    
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <div class="header-content">
                    <div class="header-logo">
                        <img src="src/img/logo-sta.png" alt="Logo">
                    </div>
                    <div class="header-title">
                        <h1>TUPAD ADMISSION</h1>
                    </div>
                </div>
            </nav>
            
      <main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="dashboard-header">
            <h2>Citizens</h2>
        </div>

        <div class="stats-cards">
            <a href="#" class="card-link">
                <div class="stats-card">
                    <div class="card-number" id="total-count">245</div>
                    <div class="card-title">
                        <span class="icon-red">👥</span> Total Registered Citizens
                    </div>
                </div>
            </a>

            <a href="#" class="card-link">
                <div class="stats-card">
                    <div class="card-number" id="eligible-count">158</div>
                    <div class="card-title">
                        <span class="icon-green">✅</span> Eligible for TUPAD
                    </div>
                </div>
            </a>

            <a href="#" class="card-link">
                <div class="stats-card">
                    <div class="card-number" id="ineligible-count">87</div>
                    <div class="card-title">
                        <span class="icon-orange">❌</span> Ineligible Citizens
                    </div>
                </div>
            </a>

            <a href="#" class="card-link">
                <div class="stats-card">
                    <div class="card-number" id="review-count">32</div>
                    <div class="card-title">
                        <span class="icon-red">🔄</span> Under Review
                    </div>
                </div>
            </a>
        </div>


    </div>
</main>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="src/js/show.js"></script>
   
</body>
</html>