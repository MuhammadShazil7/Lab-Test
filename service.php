<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - SRS Lab Automation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/services.css">
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'navbar.php' ?>

    <!-- Hero Section -->
    <div class="hero-section text-white d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-4">Our Services</h1>
            <p class="lead">Innovative solutions for modern testing and automation needs.</p>
        </div>
    </div>

    <!-- Icon-based Services Section -->
    <div class="services-icons py-5">
        <div class="container text-center">
            <h2 class="mb-4">What We Offer</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card p-4">
                        <i class="fas fa-flask fa-3x mb-3 text-primary"></i>
                        <h5>Advanced Testing</h5>
                        <p>State-of-the-art testing to ensure product quality and safety.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4">
                        <i class="fas fa-robot fa-3x mb-3 text-success"></i>
                        <h5>Process Automation</h5>
                        <p>Seamlessly integrate automation for maximum efficiency.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4">
                        <i class="fas fa-certificate fa-3x mb-3 text-danger"></i>
                        <h5>Regulatory Compliance</h5>
                        <p>Expert assistance to achieve certifications and approvals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Services -->
    <div class="detailed-services py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Expertise</h2>
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="images/t.jpg" alt="Testing" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h4>Comprehensive Testing</h4>
                    <p>We provide thorough testing services for electrical products to meet safety and industry standards.</p>
                    <ul>
                        <li>Durability and endurance tests</li>
                        <li>Thermal resistance evaluations</li>
                        <li>Load performance checks</li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="images/p7.jpg" alt="Automation" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 order-md-1">
                    <h4>Customized Automation</h4>
                    <p>Our automation tools simplify your processes, saving time and resources while ensuring precision.</p>
                    <ul>
                        <li>Workflow automation design</li>
                        <li>Real-time data monitoring</li>
                        <li>Seamless integration into existing systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonials py-5 text-white">
        <div class="container text-center">
            <h2 class="mb-4">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial p-4 rounded shadow text-dark">
                        <p>"SRS Lab Automation has revolutionized our testing processes. Their expertise is unmatched."</p>
                        <h6>- John D.</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial p-4 rounded shadow text-dark">
                        <p>"The automation tools are a game-changer. Highly recommend their services!"</p>
                        <h6>- Sarah K.</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial p-4 rounded shadow text-dark">
                        <p>"Great support and reliable testing solutions. SRS is our go-to partner."</p>
                        <h6>- Michael T.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <div class="cta-section py-5 text-center">
        <h2>Let's Work Together</h2>
        <p>Reach out to discover how we can assist you in achieving excellence in testing and automation.</p>
        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Get Started</a>
    </div>

    <!-- Footer -->
    <?php include 'footer.php' ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
