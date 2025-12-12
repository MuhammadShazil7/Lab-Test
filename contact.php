<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include 'db.php';

// Include navbar

// Show success or error message based on form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    if (empty($name) || empty($email) || empty($message)) {
        $msg = "Please fill in all fields.";
    } else {
        $sql = "INSERT INTO contact_requests (name, email, message) VALUES ('$name', '$email', '$message')";
        $msg = $conn->query($sql) ? "Your message has been sent successfully!" : "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SRS Electrical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include 'navbar.php';?>
    
<div class="container animate__animated animate__fadeIn mt-5 mb-5">
    <h1>Contact Us</h1>

    <?php if (isset($msg)): ?>
        <div class="alert alert-info"><?= $msg ?></div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6">
            <div class="contact-form-container">
                <form method="POST" action="contact.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=..." loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
