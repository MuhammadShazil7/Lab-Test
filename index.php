<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Automation - SRS Electrical</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/hom.css">
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <div class="hero-banner">
        <div class="hero-overlay text-center text-white d-flex align-items-center justify-content-center flex-column">
            <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">Lab Automation</h1>
            <p class="lead mt-3 animate__animated animate__fadeInUp">Redefining Precision. Accelerating Innovation.</p>
            <p class="small mt-3 animate__animated animate__fadeInUp">
                At SRS Electrical, we combine technology and expertise to automate testing, certification, and quality assurance processes for industries worldwide.
            </p>
            <a href="service.php" class="btn btn-warning btn-lg mt-4 animate__animated animate__zoomIn">Explore Services</a>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="stats-section bg-dark text-white text-center py-5">
        <div class="container">
            <h2 class="mb-4">By the Numbers</h2>
            <p class="mb-5">Our consistent growth and achievements highlight our dedication to precision, innovation, and customer satisfaction.</p>
            <div class="row">
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold counter" data-target="5000">0</h3>
                    <p>Tests Conducted</p>
                </div>
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold counter" data-target="350">0</h3>
                    <p>Clients Served</p>
                </div>
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold counter" data-target="25">0</h3>
                    <p>Years of Experience</p>
                </div>
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold counter" data-target="98">0%</h3>
                    <p>Success Rate</p>
                </div>
            </div>
        </div>
    </div>

    <!-- What We Do Section -->
    <div class="what-we-do-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4">What We Do</h2>
                    <p>We specialize in automating and optimizing the testing and certification processes for electrical products. With cutting-edge technologies and unparalleled expertise, we ensure your products meet global standards efficiently.</p>
                    <ul>
                        <li>Custom Testing Frameworks</li>
                        <li>Advanced Automation Systems</li>
                        <li>Regulatory Certification Support</li>
                        <li>Comprehensive Reporting and Analytics</li>
                        <li>On-site Testing and Installation Assistance</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/p4.jpg" alt="Automation Process" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="choose-us-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Why Choose Us?</h2>
            <p class="text-center mb-5">
                At SRS Electrical, we aim to redefine laboratory operations by providing innovative solutions that prioritize accuracy, efficiency, and compliance. Here's what sets us apart:
            </p>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-box p-4 shadow rounded">
                        <i class="fas fa-robot fa-3x text-primary mb-3"></i>
                        <h5>Cutting-Edge Technology</h5>
                        <p>Our labs are equipped with state-of-the-art tools to ensure precision and reliability.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box p-4 shadow rounded">
                        <i class="fas fa-users fa-3x text-primary mb-3"></i>
                        <h5>Expert Team</h5>
                        <p>Work with certified professionals with decades of industry expertise.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box p-4 shadow rounded">
                        <i class="fas fa-globe fa-3x text-primary mb-3"></i>
                        <h5>Global Standards</h5>
                        <p>We help you achieve compliance with international safety and quality benchmarks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section text-dark text-center py-5">
        <h2>Ready to Transform Your Lab Operations?</h2>
        <p>
            Take the first step towards optimized and hassle-free laboratory processes. Our experts are just a click away. 
            Join hundreds of satisfied clients who trust us for precision and innovation.
        </p>
        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Get in Touch</a>
    </div>

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
