<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance</title>
     <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/admin/grievance.css">
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
                <li class="sidebar-item active">
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
            <h2>Grievance</h2>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Grievances</h3>
                <div class="stat-number">142</div>
                <p>This Month</p>
            </div>
            <div class="stat-card">
                <h3>Pending</h3>
                <div class="stat-number">28</div>
                <p>Require Action</p>
            </div>
            <div class="stat-card">
                <h3>Avg. Resolution</h3>
                <div class="stat-number">5.2</div>
                <p>Days</p>
            </div>
        </div>

        <!-- Filters -->
        <div class="filters">
            <select style="padding: 8px; margin-right: 10px;">
                <option>All Statuses</option>
                <option>Pending</option>
                <option>In Progress</option>
                <option>Resolved</option>
            </select>
            
            <input type="date" style="padding: 8px; margin-right: 10px;">
            
            <input type="text" placeholder="Search..." style="padding: 8px; width: 300px;">
            
            <button class="btn btn-primary">Apply Filters</button>
        </div>

        <!-- Grievances Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Applicant</th>
                    <th>Type</th>
                    <th>Submitted</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#TUPAD-2024-00123</td>
                    <td>Juan Dela Cruz</td>
                    <td>Name Verification</td>
                    <td>15 Jul 2024</td>
                    <td><span class="badge badge-primary">In Progress</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm">Assign</button>
                        <button class="btn btn-sm" style="background: var(--success); color: white;">Resolve</button>
                    </td>
                </tr>
                <tr>
                    <td>#TUPAD-2024-00124</td>
                    <td>Maria Santos</td>
                    <td>Duplicate Entry</td>
                    <td>14 Jul 2024</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm">Assign</button>
                        <button class="btn btn-sm" style="background: var(--success); color: white;">Resolve</button>
                    </td>
                </tr>
                <tr>
                    <td>#TUPAD-2024-00125</td>
                    <td>Roberto Garcia</td>
                    <td>System Error</td>
                    <td>10 Jul 2024</td>
                    <td><span class="badge badge-success">Resolved</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm">View</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../../src/js/show.js"></script>
</body>
</html>