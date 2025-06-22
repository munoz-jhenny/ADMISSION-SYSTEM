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
    <style>
        /* Action Buttons Styles */
        .action-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin: 30px 0;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .import-btn {
            background: #FFFFFF;
            color: #333;
            border: 1px solid #ddd;
        }

        .import-btn:hover {
            background: #f5f5f5;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .add-btn {
            background: #4E6009;
            color: #FFFFFF;
        }

        .add-btn:hover {
            background: #3d4d07;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
        }

        .btn-icon {
            margin-right: 8px;
            font-size: 16px;
        }

        /* Table Styles */
        .citizens-table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            font-size: 14px;
            margin-top: 20px;
        }

        .citizens-table th {
            background-color: #f8f9fa;
            text-align: left;
            padding: 12px 15px;
            font-weight: 600;
            border-bottom: 2px solid #e9ecef;
        }

        .citizens-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
            vertical-align: middle;
        }

        .citizens-table tr:hover {
            background-color: #f8f9fa;
        }

        /* Status Badges */
        .status {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 13px;
        }

        .status-eligible {
            background-color: #e6f7e6;
            color: #28a745;
        }

        .status-ineligible {
            background-color: #feeaea;
            color: #dc3545;
        }

        .status-review {
            background-color: #fff8e6;
            color: #ffc107;
        }

        /* Action Buttons in Table */
        .table-action-btn {
            padding: 6px 12px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 13px;
            transition: all 0.2s;
        }

        .view-btn {
            background-color: #4E6009;
            color: white;
        }

        .view-btn:hover {
            background-color: #3a4a07;
        }

        .verify-btn {
            background-color: #6c757d;
            color: white;
        }

        .verify-btn:hover {
            background-color: #5a6268;
        }

        /* Empty State */
        .empty-table-message {
            text-align: center;
            padding: 40px;
            color: #6c757d;
            font-style: italic;
            background-color: #f8f9fa;
            border: 1px dashed #dee2e6;
            border-top: none;
        }
    </style>
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