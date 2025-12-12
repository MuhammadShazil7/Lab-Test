<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <style>

            /* Footer Title Styling */

            footer{
                margin-top: 50px;
            }
.footer-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
    position: relative;
    color: #f8f9fa;
}

.footer-title::after {
    content: '';
    display: block;
    width: 50px;
    height: 3px;
    background:rgb(7, 85, 255);
    margin-top: 5px;
    margin-left: 5px;
}

/* Quick Links Styling */
.footer-links li {
    margin-bottom: 0.5rem;
}

.footer-links a {
    color: #ddd;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-links a:hover {
    color: #ffc107;
    transform: translateX(5px);
}

/* Social Icons Styling */
.social-icon {
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    font-size: 1.5rem;
    transition: all 0.3s ease-in-out;
}

.social-icon:hover {
    color:rgb(7, 119, 255);
    transform: scale(1.2);
    animation: shake 0.5s;
}

/* Contact Info Styling */
.footer ul {
    padding-left: 0;
}

.footer ul li {
    margin-bottom: 0.5rem;
    color: #ccc;
    font-size: 0.95rem;
}

/* Animation */
@keyframes shake {
    0%, 100% {
        transform: rotate(0);
    }
    25% {
        transform: rotate(3deg);
    }
    50% {
        transform: rotate(-50deg);
    }
    75% {
        transform: rotate(3deg);
    }
}

        </style>

    </head>

    <body>
     
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <footer class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">About Us</h5>
                <p>
                    We specialize in lab automation, offering cutting-edge solutions to redefine precision and accelerate innovation.
                </p>
            </div>
            <!-- Quick Links Section -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="reports.php">Reports</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact Section -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">Contact Us</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-phone-alt"></i> +92-123-456-789</li>
                    <li><i class="fas fa-envelope"></i> support@example.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> Karachi, Pakistan</li>
                </ul>
            </div>
        </div>
        <!-- Social Icons -->
        <div class="row mt-4">
            <div class="col text-center">
                <a href="facebook.com" class="social-icon"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="twitter.com" class="social-icon"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="linkedin.com" class="social-icon"><i class="fab fa-linkedin fa-lg"></i></a>
                <a href="instagram.com" class="social-icon"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row mt-3">
            <div class="col text-center">
                <p>&copy; 2024 SRS Electrical. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

    </body>

    </html>

