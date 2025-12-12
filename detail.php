<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_automation";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product ID from the URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch product details
$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    die("Product not found.");
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail - <?php echo htmlspecialchars($product['product_name']); ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional -->
</head>
<body>
    <header>
        <h1>Product Details</h1>
    </header>
    <main>
        <div class="product-detail">
            <h2><?php echo htmlspecialchars($product['product_name']); ?></h2>
            <p><strong>Testing Status:</strong> <?php echo htmlspecialchars($product['testing_status']); ?></p>
            <p><strong>Last Updated:</strong> <?php echo htmlspecialchars($product['last_updated']); ?></p>
            <p><strong>Testing Notes:</strong> <?php echo htmlspecialchars($product['testing']); ?></p>
        </div>
        <a href="index.php">Back to Products</a>
    </main>
</body>
</html>
