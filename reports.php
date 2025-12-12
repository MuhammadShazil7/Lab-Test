<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

// Check if table exists
$tableCheck = $conn->query("SHOW TABLES LIKE 'products'");
if($tableCheck->num_rows == 0){
    die("Error: 'products' table does not exist. Please create it first.");
}

// Fetch summary data
$totalProducts = $conn->query("SELECT COUNT(*) AS count FROM products")->fetch_assoc()['count'] ?? 0;
$testedProducts = $conn->query("SELECT COUNT(*) AS count FROM products WHERE testing_status = 'tested'")->fetch_assoc()['count'] ?? 0;
$failedProducts = $conn->query("SELECT COUNT(*) AS count FROM products WHERE testing_status = 'failed'")->fetch_assoc()['count'] ?? 0;
$pendingProducts = $conn->query("SELECT COUNT(*) AS count FROM products WHERE testing_status = 'pending'")->fetch_assoc()['count'] ?? 0;

// Build WHERE clause safely
$where = [];
$params = [];

if(isset($_GET['status']) && $_GET['status'] != ''){
    $where[] = "testing_status = ?";
    $params[] = $_GET['status'];
}

if(!empty($_GET['start_date']) && !empty($_GET['end_date'])){
    $where[] = "DATE(last_updated) BETWEEN ? AND ?";
    $params[] = $_GET['start_date'];
    $params[] = $_GET['end_date'];
}

$sql = "SELECT * FROM products";
if($where){
    $sql .= " WHERE " . implode(" AND ", $where);
}
$sql .= " ORDER BY last_updated DESC";

// Prepare and execute
$stmt = $conn->prepare($sql);
if(!$stmt){
    die("Prepare failed: " . $conn->error);
}

if($params){
    // Determine types (all strings)
    $types = str_repeat('s', count($params));
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();

// Export to CSV
if(isset($_GET['export']) && $_GET['export'] == 'csv'){
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="reports.csv"');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Product Name', 'Testing Status', 'Last Updated']);
    while($row = $result->fetch_assoc()){
        fputcsv($output, $row);
    }
    fclose($output);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lab Automation Reports</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<link rel="stylesheet" href="css/report.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <!-- Summary -->
    <h2 class="text-center mb-4" data-aos="fade-down">Reports Summary</h2>
    <div class="row text-center">
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h5>Total Products</h5>
                    <p class="display-6"><?= $totalProducts ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <div class="card bg-success text-white mb-3">
                <div class="card-body">
                    <h5>Tested</h5>
                    <p class="display-6"><?= $testedProducts ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
            <div class="card bg-danger text-white mb-3">
                <div class="card-body">
                    <h5>Failed</h5>
                    <p class="display-6"><?= $failedProducts ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
            <div class="card bg-warning text-dark mb-3">
                <div class="card-body">
                    <h5>Pending</h5>
                    <p class="display-6"><?= $pendingProducts ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <h3 class="mt-5" data-aos="fade-right">Filter Records</h3>
    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-4">
            <label for="status" class="form-label">Testing Status</label>
            <select class="form-select" id="status" name="status">
                <option value="">All</option>
                <option value="tested" <?= (isset($_GET['status']) && $_GET['status']=='tested') ? 'selected' : '' ?>>Tested</option>
                <option value="failed" <?= (isset($_GET['status']) && $_GET['status']=='failed') ? 'selected' : '' ?>>Failed</option>
                <option value="pending" <?= (isset($_GET['status']) && $_GET['status']=='pending') ? 'selected' : '' ?>>Pending</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" name="start_date" value="<?= $_GET['start_date'] ?? '' ?>">
        </div>
        <div class="col-md-4">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" class="form-control" name="end_date" value="<?= $_GET['end_date'] ?? '' ?>">
        </div>
        <div class="col-md-12 text-end">
            <button type="submit" class="btn btn-primary">Apply Filters</button>
            <a href="reports.php?export=csv" class="btn btn-success">Export to CSV</a>
        </div>
    </form>

    <!-- Records Table -->
    <table class="table table-striped mt-3" data-aos="fade-up">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Testing Status</th>
                <th>Last Updated</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['testing_status']}</td>
                        <td>{$row['last_updated']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
AOS.init({ duration: 1200 });
</script>
</body>
</html>
