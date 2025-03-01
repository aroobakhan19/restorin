<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About-Mamoo Bhanja</title>
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
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-2 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="New-Logo.png" style="width: 150px; height:150px;" alt=""></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="menu.php" class="nav-item nav-link ">Menu</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="about.php" class="nav-item nav-link active">About</a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


       <!-- About Start -->
       <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Mamu Bhanja</h1>
                    <p class="mb-4">where authentic desi flavors meet the warmth of family tradition. Our journey began with a passion for bringing people together through the rich, bold tastes of traditional cuisine. With years of experience and a love for cooking, we have created a place where every dish is made with care and the freshest ingredients. From spicy curries to tender kebabs and sweet desserts, every bite at Mamu Bhanja tells a story of tradition and excellence.</p>
                    <p class="mb-4">At Mamu Bhanja, we believe in offering more than just a meal—we offer a memorable dining experience that reflects our heritage. Whether you're here for a casual lunch, a family dinner, or a special celebration, you can always expect quality food, exceptional service, and a welcoming atmosphere.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Dishes</p>
                                    <h6 class="text-uppercase mb-0">In Menu</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Deals</p>
                                    <h6 class="text-uppercase mb-0">Daily</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- story start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="mb-4">Our Story</h2>
                <p class="mb-4">Mamu Bhanja started as a dream to create a place where traditional desi flavors meet modern hospitality. Founded by a family passionate about sharing authentic cuisine, our journey began with a simple vision — to bring people together over delicious food. Every dish at Mamu Bhanja is crafted with love, bringing a touch of tradition and innovation in every bite. Whether it’s a family recipe passed down through generations or a new fusion creation, we strive to make every meal a memorable experience.</p>
                <p class="mb-4">Our name, "Mamu Bhanja," represents the bond of love and tradition, symbolizing our welcoming and warm atmosphere. It's not just a restaurant, it's a place where friends, families, and food lovers create memories together. We’re honored to serve you and share the flavors that make us who we are!</p>
            </div>
            <div class="col-lg-6">
                <video src="img/2894881-uhd_3840_2160_24fps.mp4" loop autoplay muted style="width: 100%; height: auto;"></video>
            </div>
        </div>
    </div>
</div>

<!-- story end -->
        
        <!-- mission start -->
        <div class="container-xxl py-5 bg-light">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img src="img/menu/download (2).jpg" class="img-fluid rounded" style="width: 80% ; height: auto;" alt="Our Story">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-4">Our Vision and Mission</h2>
                        <p class="mb-4">At Mamu Bhanja, our vision is to become the go-to destination for authentic and flavorful desi cuisine, where every guest feels like part of our family. We are committed to serving the best quality food with exceptional service, ensuring every experience is unique and memorable. We aspire to create a space where our guests feel at home while savoring the richness of desi flavors from every corner of the world.</p>
                        <p class="mb-4">Our mission is simple: to bring people together, celebrate culture, and delight in good food. We promise to continually innovate while staying true to the traditional flavors that make desi food so special. Your satisfaction is at the heart of everything we do, and we strive to exceed your expectations every time you dine with us.</p>
                    </div>
                   
                </div>
            </div>
        </div>
        
        <!-- mission end -->

        <!-- sustainability start -->
        <div class="container-xxl py-5 bg-light">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h2 class="mb-4">Sustainability at Mamu Bhanja</h2>
                        <p class="mb-4">We are dedicated to serving not just great food but food that is good for the planet. At Mamu Bhanja, sustainability is at the core of what we do. We focus on sourcing locally, reducing food waste, and using eco-friendly packaging wherever possible. Our goal is to make a positive impact on both our community and the environment.</p>
                        <p class="mb-4">We believe that great food should not only delight the senses but also support the health of our planet. From farm-to-table practices to responsible ingredient sourcing, we aim to provide an experience that leaves both our guests and the earth feeling nourished.</p>
                    </div>
                    <div class="col-lg-6">
                        <video src="img/menu/2620043-uhd_3840_2160_25fps.mp4" autoplay loop muted style="width: 100%; height: auto;" ></video>
                    </div>
                </div>
            </div>
        </div>
        
<!-- sustainability End -->

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
</body>

</html>