<?php
session_start();

// Redirect user to login page if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection
$conn = new mysqli("localhost", "root", "", "lab_automation");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to safely fetch counts
function fetchCount($conn, $query) {
    $result = $conn->query($query);
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    $row = $result->fetch_assoc();
    return $row[array_keys($row)[0]] ?? 0;
}

// Fetch dashboard data
$totalProducts   = fetchCount($conn, "SELECT COUNT(*) AS total FROM products");
$testedProducts  = fetchCount($conn, "SELECT COUNT(*) AS tested FROM products WHERE testing_status = 'tested'");
$failedTests     = fetchCount($conn, "SELECT COUNT(*) AS failed FROM products WHERE testing_status = 'failed'");
$pendingTests    = fetchCount($conn, "SELECT COUNT(*) AS pending FROM products WHERE testing_status = 'pending'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Automation Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body { background-color: #f8f9fa; }
        .dashboard-card {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 2rem;
        }
        .dashboard-card:hover { transform: translateY(-5px); box-shadow: 0 12px 25px rgba(0,0,0,0.15); }
        .dashboard-card .card-icon { font-size: 3rem; margin-bottom: 1rem; }
        .total .card-icon { color: #007bff; }
        .tested .card-icon { color: #28a745; }
        .failed .card-icon { color: #dc3545; }
        .pending .card-icon { color: #ffc107; }
        .chart-container { max-width: 900px; margin: 3rem auto; }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Lab Automation Dashboard</h1>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="dashboard-card total animate__animated animate__fadeInUp">
                <div class="card-icon"><i class="fas fa-box"></i></div>
                <h5>Total Products</h5>
                <p class="fs-2 fw-bold"><?php echo $totalProducts; ?></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card tested animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <div class="card-icon"><i class="fas fa-check-circle"></i></div>
                <h5>Tested Products</h5>
                <p class="fs-2 fw-bold"><?php echo $testedProducts; ?></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card failed animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <div class="card-icon"><i class="fas fa-times-circle"></i></div>
                <h5>Failed Tests</h5>
                <p class="fs-2 fw-bold"><?php echo $failedTests; ?></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card pending animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
                <div class="card-icon"><i class="fas fa-hourglass-half"></i></div>
                <h5>Pending Tests</h5>
                <p class="fs-2 fw-bold"><?php echo $pendingTests; ?></p>
            </div>
        </div>
    </div>

    <div class="chart-container">
        <canvas id="dashboardChart"></canvas>
    </div>

    <div class="text-center mt-4">
        <a href="add_product.php" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">Add New Product</a>
        <a href="records.php" class="btn btn-secondary btn-lg animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">View Records</a>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('dashboardChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Total', 'Tested', 'Failed', 'Pending'],
        datasets: [{
            label: 'Products Status',
            data: [<?php echo $totalProducts; ?>, <?php echo $testedProducts; ?>, <?php echo $failedTests; ?>, <?php echo $pendingTests; ?>],
            backgroundColor: ['#007bff', '#28a745', '#dc3545', '#ffc107'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
    }
});
</script>

</body>
</html>
