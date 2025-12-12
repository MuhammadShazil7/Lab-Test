<?php
session_start();
include 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product_name'] ?? '';
    $testingStatus = $_POST['testing_status'] ?? '';

    // Validate input
    if (!empty($productName) && !empty($testingStatus)) {
        // Use prepared statement
        $stmt = $conn->prepare("INSERT INTO products (name, testing_status, created_at) VALUES (?, ?, NOW())");
        $stmt->bind_param("ss", $productName, $testingStatus);

        if ($stmt->execute()) {
            $message = "<div class='alert alert-success text-center'>New product added successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger text-center'>Error: " . htmlspecialchars($stmt->error) . "</div>";
        }

        $stmt->close();
    } else {
        $message = "<div class='alert alert-warning text-center'>Please fill in all fields!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - SRS Electrical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/add_product.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container my-5">
        <div class="form-container shadow-lg p-5 rounded">
            <h2 class="text-center mb-4">Add New Electrical Product</h2>

            <!-- Display message -->
            <?php if(!empty($message)) echo $message; ?>

            <form method="POST" action="">
                <div class="mb-4">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control rounded-pill p-3" id="product_name" name="product_name" required>
                </div>

                <div class="mb-4">
                    <label for="testing_status" class="form-label">Testing Status</label>
                    <select class="form-select rounded-pill p-3" id="testing_status" name="testing_status" required>
                        <option value="" disabled selected>Select Status</option>
                        <option value="pending">Pending</option>
                        <option value="tested">Tested</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary rounded-pill px-5 py-2">Add Product</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 SRS Electrical. All rights reserved.</p>
        <div>
            <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
