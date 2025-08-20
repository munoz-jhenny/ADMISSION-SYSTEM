<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/admin/management.css">
</head>
<body>
        <div class="wrapper">
            <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button" aria-label="Toggle Sidebar">
                <i class="lni lni-grid-alt" aria-hidden="true"></i>
            </button>
            <div class="sidebar-logo">
                <a href="#">Admission</a>
            </div>
        </div>
        
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="index.php" class="sidebar-link">
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
            <li class="sidebar-item">
                <a href="audit.php" class="sidebar-link collapsed has-dropdown">
                    <i class="lni lni-bar-chart"></i>
                    <span>Audit Reports</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="services.php" class="sidebar-link collapsed has-dropdown">
                    <i class="lni lni-layers"></i>
                    <span>Services</span>
                </a>
            </li>
            <li class="sidebar-item active">
                <a href="management.php" class="sidebar-link">
                    <i class="lni lni-cog"></i>
                    <span>Management</span>
                </a>
            </li>
            <li class="sidebar-item logout">
                <a href="../../login.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>

    </aside>


        <div class="main">
            <header>
                 <div class="header-container">
                    <h1 class="header-title">TUPAD ADMISSION SYSTEM</h1>
                </div>
            </header>
            
      <main class="content px-3 py-4">
            <div class="container-fluid">
                <div class="dashboard-header">
                    <h2>Management</h2>
                </div>
                
                    <div class="management-cards">
                    <!-- Staff List Card -->
                    <a href="#" class="management-card">
                        <i class="lni lni-users card-icon-symbol" aria-hidden="true"></i>
                        <h3 class="card-title">Staff List</h3>
                        <p class="card-description">View and manage the list of employees</p>
                    </a>

                    <!-- Roles Card -->
                    <a href="#" class="management-card">
                        <i class="lni lni-cog card-icon-symbol" aria-hidden="true"></i>
                        <h3 class="card-title">Roles</h3>
                        <p class="card-description">Define and update staff roles and permissions</p>
                    </a>

                    <!-- Add Staff Card -->
                    <a href="#" class="management-card">
                        <i class="lni lni-plus card-icon-symbol" aria-hidden="true"></i>
                        <h3 class="card-title">Add Staff</h3>
                        <p class="card-description">Register a new employee in the system</p>
                    </a>

                    <!-- Delete Staff Card -->
                    <a href="#" class="management-card">
                        <i class="lni lni-trash-can card-icon-symbol" aria-hidden="true"></i>
                        <h3 class="card-title">Delete Staff</h3>
                        <p class="card-description">Delete staff members from the system</p>
                    </a>
                </div>
      </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="../../src/js/show.js"></script>
</body>
</html>
