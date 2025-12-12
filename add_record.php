<?php include 'db.php'; ?>
<?php header("Location: records.php?msg=added");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Testing Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Lab Automation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="records.php">Testing Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_record.php">Add Record</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container mt-5">
        <h2 class="text-center">Add Testing Record</h2>
        <form action="add_record.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="product_id" class="form-label">Product ID</label>
                <input type="text" class="form-control" id="product_id" name="product_id" required>
            </div>
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="mb-3">
                <label for="testing_status" class="form-label">Testing Status</label>
                <select class="form-control" id="testing_status" name="testing_status" required>
                    <option value="Pending">Pending</option>
                    <option value="Passed">Passed</option>
                    <option value="Failed">Failed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Record</button>
        </form>
    </div>

    <?php
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $testing_status = $_POST['testing_status'];

        $sql = "INSERT INTO products (product_id, product_name, testing_status) VALUES ('$product_id', '$product_name', '$testing_status')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-4'>Record added successfully!</div>";
        } else {
            echo "<div class='alert alert-danger mt-4'>Error: " . $conn->error . "</div>";
        }
    }
    ?>
</body>
</html>
