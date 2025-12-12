<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/records.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-5 fw-bold text-primary">Testing Records</h1>
            <p class="text-muted">View and manage all testing records with ease.</p>
        </div>

        <!-- Search Bar -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <form id="searchForm" class="d-flex">
                <input class="form-control me-2" id="searchInput" type="text" name="search" placeholder="Search by ID or Product Name">
                <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i> Search</button>
            </form>
            <a href="add_product.php" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New Record</a>
        </div>

        <!-- Table Section -->
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Records Overview</h5>
            </div> 
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Testing Status</th>
                            <th>Last Updated</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="recordTable">
                        <!-- Records will be dynamically loaded here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
<script src="js/records.js"></script>
</html>
