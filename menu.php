<?php
include 'config.php';
session_start();
if (isset($_SESSION['user_id'])) {
    echo '<script>localStorage.setItem("user_id", "' . $_SESSION['user_id'] . '");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Menu-Mamoo Bhanja</title>
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
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Desi</a></li>
                            <li class="breadcrumb-item"><a href="#">Fast Food</a></li>
                            <li class="breadcrumb-item"><a href="#">Barbeque</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        
        <!-- main menu start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Desi Items</h5>
                    <h1 class="mb-5">Our Complete Menu</h1>
                    <p class="mb-5">Click to select a category</p>
                </div>
                <div class="container">
                    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                    href="#tab-3" id="beef-tab">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Main</small>
                                        <h6 class="mt-n1 mb-0">Beef</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-4"
                                    id="chicken-tab">
                                    <i class="fa fa-drumstick-bite fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Main</small>
                                        <h6 class="mt-n1 mb-0">Chicken</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-5"
                                    id="tandoor-tab">
                                    <i class="fa fa-bread-slice fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Sides</small>
                                        <h6 class="mt-n1 mb-0">Tandoor</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-6"
                                    id="days-tab">
                                    <i class="fa fa-calendar-alt fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Daily</small>
                                        <h6 class="mt-n1 mb-0">Specials</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-7"
                                    id="dessert-tab">
                                    <i class="fa fa-ice-cream fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Sweet</small>
                                        <h6 class="mt-n1 mb-0">Desserts</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-8"
                                    id="drinks-tab">
                                    <i class="fa fa-glass-martini fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Drinks</small>
                                        <h6 class="mt-n1 mb-0">Beverages</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
        
                        <div class="tab-content">
                            <div id="tab-3" class="tab-pane fade show p-0 active">
                                <div class="row g-4" id="beef-menu"></div>
                            </div>
                            <div id="tab-4" class="tab-pane fade show p-0">
                                <div class="row g-4" id="chicken-menu"></div>
                            </div>
                            <div id="tab-5" class="tab-pane fade show p-0">
                                <div class="row g-4" id="tandoor-menu"></div>
                            </div>
                            <div id="tab-6" class="tab-pane fade show p-0">
                                <div class="row g-4" id="days-menu"></div>
                            </div>
                            <div id="tab-7" class="tab-pane fade show p-0">
                                <div class="row g-4" id="dessert-menu"></div>
                            </div>
                            <div id="tab-8" class="tab-pane fade show p-0">
                                <div class="row g-4" id="drinks-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu end  -->

        <!-- fast food start  -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Fast Food Menu</h5>
                    <h1 class="mb-5">Our Complete Fast Food Menu</h1>
                    <p class="mb-5">Click to select a category</p>
                </div>
                <div class="container">
                    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                            
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-bbq"
                                    id="bbq-tab">
                                    <i class="fa fa-fire fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">B.B.Q</small>
                                        <h6 class="mt-n1 mb-0">B.B.Q</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3  pb-3 " data-bs-toggle="pill"
                                    href="#tab-broast" id="broast-tab">
                                    <i class="fa fa-bacon fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Main</small>
                                        <h6 class="mt-n1 mb-0">Broast</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-burgers"
                                    id="burgers-tab">
                                    <i class="fa fa-hamburger fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Burgers</small>
                                        <h6 class="mt-n1 mb-0">Burgers</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-sandwiches"
                                    id="sandwiches-tab">
                                    <i class="fa fa-hotdog fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Sandwiches</small>
                                        <h6 class="mt-n1 mb-0">Sandwiches</h6>
                                    </div>
                                </a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-roll"
                                    id="roll-tab">
                                    <i class="fa fa-scroll fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Rolls</small>
                                        <h6 class="mt-n1 mb-0">Rolls</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-fries"
                                    id="fries-tab">
                                    <i class="fa fa-bars fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Sides</small>
                                        <h6 class="mt-n1 mb-0">Fries</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
    
                        <div class="tab-content">
                            <div id="tab-bbq" class="tab-pane fade show p-0 active">
                                <div class="row g-4" id="bbq-menu"></div>
                            </div>
                            <div id="tab-broast" class="tab-pane fade show p-0 ">
                                <div class="row g-4" id="broast-menu"></div>
                            </div>
                            <div id="tab-burgers" class="tab-pane fade show p-0">
                                <div class="row g-4" id="burgers-menu"></div>
                            </div>
                            <div id="tab-sandwiches" class="tab-pane fade show p-0">
                                <div class="row g-4" id="sandwiches-menu"></div>
                            </div>
                           
                            <div id="tab-roll" class="tab-pane fade show p-0">
                                <div class="row g-4" id="roll-menu"></div>
                            </div>
                            <div id="tab-fries" class="tab-pane fade show p-0">
                                <div class="row g-4" id="fries-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fast food end  -->

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
    <script src="js/menu.js"></script>
    <script src="js/script.js"></script>

</body>

</html>