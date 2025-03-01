<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Privacy&Policy-Mamoo Bhanja</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
</head>
<body>
      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="Wesbite-Logo.png" style="width: 150px; height:150px;" alt=""></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
            
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <!-- Profile Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['uname']; ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="cart.php">Cart</a></li>
                                <li><a class="dropdown-item" href="userprofile.php">Profile</a></li>
                                <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <!-- Order Button for Guests -->
                        <a href="signup.php" class="btn btn-primary py-2 px-4">Order</a>
                    <?php endif; ?>
                </div>
            </nav> 

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Privacy & Policy</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Privacy & Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
 <!-- Privacy Policy Content -->
 <div class="container content-section">
        <h2>1. Introduction</h2>
        <p>Welcome to Mamu Bhanja Restaurant. Your privacy is important to us. This policy outlines how we collect, use, and protect your information.</p>
        
        <h2>2. Information We Collect</h2>
        <p>We collect personal information when you place an order, make a reservation, or contact us. This may include your name, email, phone number, and address.</p>
        
        <h2>3. How We Use Your Information</h2>
        <ul>
            <li>To process and deliver your orders.</li>
            <li>To improve our services and website experience.</li>
            <li>To communicate with you regarding promotions, offers, or updates.</li>
        </ul>
        
        <h2>4. Data Security</h2>
        <p>We implement security measures to protect your personal data. However, we cannot guarantee absolute security due to internet vulnerabilities.</p>
        
        <h2>5. Cookies</h2>
        <p>We use cookies to enhance user experience. You can disable cookies in your browser settings.</p>
        
        <h2>6. Third-Party Sharing</h2>
        <p>We do not sell, trade, or share your personal information with third parties, except as required by law.</p>
        
        <h2>7. Contact Us</h2>
        <p>If you have any questions about this policy, please contact us at <strong>info@mamubhanja.com</strong> or visit our restaurant.</p>
    </div>
            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                   
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> +92 310 2777156 </p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>mamoobhanjaofficial@gmail.com</p>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Shop NO # 01 Plot No L-9 ST-1, Sector 30-A near Jinnah Foundation School </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal"><i class="fa fa-utensils me-3"></i>Restaurant</h5>
                        <p>24/7</p>
                        <h5 class="text-light fw-normal"><i class="fa fa-motorcycle me-3"></i>Delivery</h5>
                        <p>24/7</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Socials</h4>
                        <p>Follow Us On</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/mamoobhanja/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/mamoobhanja"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Menu</h4>
                        <ul>
                        <li><a href="index.php" class="nav-item nav-link">Home</a></li>
                        <li><a href="menu.php" class="nav-item nav-link">Menu</a></li>
                        <li><a href="service.php" class="nav-item nav-link">Service</a></li>
                        <li><a href="contact.php" class="nav-item nav-link">Contact</a></li>
                        </ul> </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; Copyright <a class="border-bottom" href="mamoobhanja.com">mamoobhanja.com</a> All Right Reserved. 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                                <a href="privacypolicy.php">Privacy & Policy</a>
                                <a href="about.php">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>
</html>