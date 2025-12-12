<?php
include 'db.php';

$search = $_POST['search'] ?? '';
$search = $conn->real_escape_string($search); // prevent SQL injection

$query = "SELECT * FROM products WHERE name LIKE '%$search%' OR id LIKE '%$search%' ORDER BY id DESC";

$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Use 'created_at' instead of 'updated_at'
        $timestamp = $row['created_at'] ?? 'N/A';
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['testing_status']}</td>
            <td>{$timestamp}</td>
            <td class='text-center'>
                <a href='edit_record.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                <a href='delete_record.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5' class='text-center'>No records found</td></tr>";
}
?>
