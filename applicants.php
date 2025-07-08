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
    <link rel="stylesheet" href="src/css/applicants.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button" title="Toggle Sidebar" aria-label="Toggle Sidebar">
                    <i class="lni lni-grid-alt" aria-hidden="true"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Admission</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="dashboard.php" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a href="applicants.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Applicants</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="citizens.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-users"></i>
                        <span>Citizens</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="audit.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-bar-chart"></i>
                        <span>Audit Reports</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="grievance.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-support"></i>
                        <span>Grievance</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="services.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-layers"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="management.php" class="sidebar-link collapsed has-dropdown">
                        <i class="lni lni-cog"></i>
                        <span>Management</span>
                    </a>
                </li>
                 <li class="sidebar-item logout">
                <a href="index.php" class="sidebar-link">
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
            <h2>Applicants</h2>
        </div>

       <div class="applicants-container">
                    <div class="applicants-header">
                            <h2>Applicant Records</h2>
                    <div class="filter-controls d-flex align-items-center gap-2">
                        <label for="filterStatus" class="visually-hidden">Filter applicants by status</label>
                        <select id="filterStatus" class="form-select form-select-sm">
                            <option value="all">All Applicants</option>
                            <option value="brgy">Becuran</option>
                            <option value="brgy">Dila-dila</option>
                            <option value="brgy">San Agustin</option>
                            <option value="brgy">San Basilio</option>
                            <option value="brgy">San Isidro</option>
                            <option value="brgy">San Jose</option>
                            <option value="brgy">San Juan</option>
                            <option value="brgy">San Matias</option>
                            <option value="brgy">Santa Monica</option>
                            <option value="brgy">San Vicente</option>
                        </select>
                        <button id="refreshBtn" class="btn btn-sm btn-primary px-2 py-1 d-flex align-items-center">
                             <i class="lni lni-reload me-1 fs-6"></i> Refresh
                        </button>

                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="applicants-table table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Barangay</th>
                                <th>Status</th>
                                <th>Date Applied</th>
                                <th>Verified</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="applicantsList">
                            <tr>
                                <td colspan="6" class="text-center">Loading applicants...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="src/js/show.js"></script>
   
</body>
</html>