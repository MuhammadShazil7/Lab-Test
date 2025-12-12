<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include 'db.php';

// Get the record ID from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid record ID.");
}

// Fetch the record details
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Record not found.");
}

$product = $result->fetch_assoc();

// Update the record
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user inputs
    $productName = mysqli_real_escape_string($conn, $_POST['product_name']);
    $testingStatus = mysqli_real_escape_string($conn, $_POST['testing_status']);

    // Update query
    $updateSql = "UPDATE products 
                  SET product_name = '$productName', 
                      testing_status = '$testingStatus', 
                      last_updated = NOW() 
                  WHERE id = $id";

    if ($conn->query($updateSql) === TRUE) {
        header("Location: records.php?msg=updated");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Lab Automation</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Edit Record</h2>

        <!-- Edit Form -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="testing_status" class="form-label">Testing Status</label>
                <select class="form-select" id="testing_status" name="testing_status" required>
                    <option value="tested" <?php echo ($product['testing_status'] == 'tested') ? 'selected' : ''; ?>>Tested</option>
                    <option value="failed" <?php echo ($product['testing_status'] == 'failed') ? 'selected' : ''; ?>>Failed</option>
                    <option value="pending" <?php echo ($product['testing_status'] == 'pending') ? 'selected' : ''; ?>>Pending</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Record</button>
        </form>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Lab Automation. All rights reserved.</p>
    </footer>
</body>
</html>
