<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SRS Electrical</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        .navbar {
            transition: background-color 0.4s, box-shadow 0.4s;
        }
        .navbar.scrolled {
            background-color: #212529 !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .nav-link {
            transition: color 0.3s, transform 0.3s;
        }
        .nav-link:hover {
            color: #ffc107 !important;
            transform: translateY(-2px);
        }
        .btn-login, .btn-logout {
            border-radius: 50px;
            padding: 0.4rem 1.2rem;
            font-weight: 500;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php">SRS Electrical</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                $pages = ['index.php' => 'Home', 'about.php' => 'About Us', 'dashboard.php' => 'Dashboard', 
                          'records.php' => 'Testing Records', 'reports.php' => 'Reports', 'contact.php' => 'Contact'];
                foreach ($pages as $file => $title) {
                    $active = basename($_SERVER['PHP_SELF']) == $file ? 'active' : '';
                    echo "<li class='nav-item'>
                            <a class='nav-link $active' href='$file'>$title</a>
                          </li>";
                }
                ?>
            </ul>

            <div class="d-flex">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="btn btn-danger btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-success btn-login"><i class="fas fa-sign-in-alt"></i> Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<!-- Optional: Add spacing for fixed navbar -->
<div style="height: 70px;"></div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Change navbar on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
</body>
</html>
