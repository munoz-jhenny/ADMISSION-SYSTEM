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
                <li class="sidebar-item">
                    <a href="applicants.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Applicants</span>
                    </a>
                </li>
                <li class="sidebar-item active">
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
                        <h2>Citizens</h2>
                    </div>

                    <div class="stats-cards">
                        <a href="#" class="card-link">
                            <div class="stats-card">
                                <div class="card-number" id="total-count">48,209</div>
                                <div class="card-title">
                                    <span class="icon-red">👥</span> Total Registered Citizens
                                </div>
                            </div>
                        </a>

                        <a href="#" class="card-link">
                            <div class="stats-card">
                                <div class="card-number" id="eligible-count">854</div>
                                <div class="card-title">
                                    <span class="icon-green">✅</span> Eligible for TUPAD
                                </div>
                            </div>
                        </a>

                        <a href="#" class="card-link">
                            <div class="stats-card">
                                <div class="card-number" id="ineligible-count">245</div>
                                <div class="card-title">
                                    <span class="icon-orange">❌</span> Ineligible Citizens
                                </div>
                            </div>
                        </a>

                        <a href="#" class="card-link">
                            <div class="stats-card">
                                <div class="card-number" id="review-count">151</div>
                                <div class="card-title">
                                    <span class="icon-red">🔄</span> Under Review
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Added Action Buttons and Table -->
                    <div class="action-buttons">
                        <button class="action-btn import-btn" id="importBtn">
                            <i class="lni lni-upload btn-icon"></i>
                            Import Citizens
                        </button>
                        <button class="action-btn add-btn" id="addBtn">
                            <i class="lni lni-plus btn-icon"></i>
                            Add New Citizen
                        </button>
                    </div>

                    <table class="citizens-table">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>BARANGAY</th>
                                <th>AGE</th>
                                <th>STATUS</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody id="citizens-table-body">
                            <!-- Example row (remove in production) -->
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>Dila-Dila</td>
                                <td>29</td>
                                <td><span class="status status-eligible">Eligible</span></td>
                                <td>
                                    <button class="table-action-btn view-btn">View</button>
                                    <button class="table-action-btn verify-btn">Verify</button>
                                </td>
                            </tr>
                            <!-- Empty state (uncomment when needed) -->
                            <!-- <tr>
                                <td colspan="5" class="empty-table-message">
                                    No citizens found. Add new citizens or import from file to get started.
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </main>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
            <script src="src/js/show.js"></script>
           
        </div>
    </div>
</body>
</html>