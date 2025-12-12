<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lab Automation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Banner Section -->
    <div class="banner">
        <div class="banner-content">
            <h1 class="animate__animated animate__fadeInDown">About Us</h1>
            <p class="animate__animated animate__fadeInUp">Empowering innovation with world-class lab automation solutions.</p>
        </div>
    </div>

    <!-- About Section -->
    <div class="container mt-5">
        <h2 class="text-center animate__animated animate__fadeInUp">Who We Are</h2>
        <p class="text-center text-muted mb-5 animate__animated animate__fadeIn">
            At Lab Automation, we specialize in cutting-edge solutions to enhance productivity and precision in laboratories worldwide.
        </p>

        <!-- Mission, Vision, Values Section -->
        <div class="row mb-5">
            <div class="col-md-4 text-center animate__animated animate__fadeInLeft">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>Our Mission</h3>
                        <p>To revolutionize lab automation with innovative technology and seamless solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate__animated animate__fadeInUp">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>Our Vision</h3>
                        <p>To become the global leader in laboratory automation, empowering innovation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate__animated animate__fadeInRight">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>Our Values</h3>
                        <p>Integrity, excellence, and commitment to delivering the best for our clients.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <h2 class="text-center animate__animated animate__fadeInUp">Meet Our Team</h2>
        <div class="row mt-4">
            <div class="col-md-3 text-center animate__animated animate__zoomIn">
                <div class="card shadow-sm">
                    <img src="images/shazil.jpeg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Mohammad Shazil</h5>
                        <p class="card-text">CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center animate__animated animate__zoomIn">
                <div class="card shadow-sm">
                    <img src="images/bilal.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Bilal</h5>
                        <p class="card-text">CTO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center animate__animated animate__zoomIn">
                <div class="card shadow-sm">
                    <img src="images/abbas.jpg" class="card-img-top cover/center" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Abbas Ali</h5>
                        <p class="card-text">Lead Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center animate__animated animate__zoomIn">
                <div class="card shadow-sm">
                    <img src="images/p6.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Muzammil</h5>
                        <p class="card-text">Operations Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php' ?>

    <!-- Bootstrap and Animate.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
