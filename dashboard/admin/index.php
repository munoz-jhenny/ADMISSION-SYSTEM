<?php
require_once 'authentication/admin-class.php';
require_once '../../database/dbconnection.php';

$db = new Database();
$conn = $db->dbConnection();

$admin = new ADMIN();
if (!$admin->isUserLoggedIn()) {
  $admin->redirect('../../');
}

// Fetch admin user info
$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

// Count total applications
try {
  $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM tupad_applications");
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  $total_applications = $row['total'];
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
  $total_applications = 0;
}

// Fetch all applicants
$stmt = $conn->prepare("SELECT * FROM tupad_applications ORDER BY created_at DESC");
$stmt->execute();
$applicants = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

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
  <link rel="stylesheet" href="../../src/css/admin/index.css">
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
        <li class="sidebar-item active">
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
            <h2>Dashboard</h2>
          </div>

          <div class="stats-cards">
            <a href="new-applications.php" class="card-link">
              <div class="stats-card">
                <div class="card-number" id="new-app-count"><?php echo $total_applications; ?></div>
                <div class="card-title">
                  <span class="icon-red">📩</span> New Application
                </div>
              </div>
            </a>

            <a href="approved-applications.html" class="card-link">
              <div class="stats-card">
                <div class="card-number" id="approved-app-count">no code</div>
                <div class="card-title">
                  <span class="icon-green">✅</span> Approved Applications
                </div>
              </div>
            </a>

            <a href="approved-pending.html" class="card-link">
              <div class="stats-card">
                <div class="card-number" id="approved-pending-count">no code</div>
                <div class="card-title">
                  <span class="icon-orange">⚠️</span> Approved Pending
                </div>
              </div>
            </a>

            <a href="rejected-pending.html" class="card-link">
              <div class="stats-card">
                <div class="card-number" id="rejected-pending-count">no code</div>
                <div class="card-title">
                  <span class="icon-red">❌</span> Rejected Pending
                </div>
              </div>
            </a>
          </div>
<h1>List Of New Applicants</h1>
        <?php if ($applicants): ?>
  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Birth Date</th>
        <th>Place of Birth</th>
        <th>Address</th>
        <th>Barangay</th>
        <th>Phone Number</th>
        <th>Employment Status</th>
        <th>Income Level</th>
        <th>Income Amount</th>
        <th>Status</th>
        <th>Submitted On</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($applicants as $row): ?>
        <tr>
          <td><?= htmlspecialchars($row['full_name'] ?? 'N/A') ?></td>
          <td><?= htmlspecialchars($row['birth_date'] ?? 'N/A') ?></td>
          <td><?= htmlspecialchars($row['place_of_birth'] ?? 'N/A') ?></td>
          <td><?= htmlspecialchars($row['address'] ?? 'N/A') ?></td>
          <td><?= htmlspecialchars($row['barangay'] ?? 'N/A') ?></td>
          <td><?= htmlspecialchars($row['phone_number'] ?? 'N/A') ?></td>
          <td><?= htmlspecialchars($row['employment_status'] ?? 'N/A') ?></td>
          <td><?= htmlspecialchars($row['income_level'] ?? 'N/A') ?></td>
          <td>₱<?= isset($row['income_amount']) ? number_format((float)$row['income_amount'], 2) : '0.00' ?></td>
          <td>
            <span class="badge <?= htmlspecialchars($row['status'] ?? 'new') ?>">
              <?= ucfirst($row['status'] ?? 'New') ?>
            </span>
          </td>
          <td><?= htmlspecialchars($row['created_at'] ?? 'N/A') ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <p>No application records found.</p>
<?php endif; ?>



        </div>
      </main>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="../../src/js/show.js"></script>

</body>

</html>