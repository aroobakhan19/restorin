<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mamoo Bhanja Restaurant</title>
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
                    <h1 class="text-primary m-0"><img src="New-Logo.png" style="width: 150px; height: 150px; " alt=""></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
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
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">24/7 fresh Fast Food ad BBQ anytime at your Doorstep</p>
                            <a href="userprofile.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Order Now</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>At Mamu Bhanja, our master chefs bring authentic, flavorful desi cuisine to your table. With years of experience, they prepare every dish with love, using the freshest ingredients to create mouthwatering flavors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>We believe in serving only the best. From our rich curries to freshly baked naan, every dish at Mamu Bhanja is crafted with top-quality ingredients, ensuring a memorable dining experience every time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Craving your favorite desi dishes from Mamu Bhanja? Order online and enjoy our flavorful meals delivered straight to your door with just a few clicks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Your cravings don’t have a time limit, and neither does our service. Mamu Bhanja is open 24/7 to serve you delicious, authentic meals whenever you need them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


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


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Rated Items</h1>
                </div>
                <div class="container">
                    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                    href="#tab-1" id="desi-tab">
                                    <i class="fa fa-fire fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Authentic</small>
                                        <h6 class="mt-n1 mb-0">Desi</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2"
                                    id="fastfood-tab">
                                    <i class="fa fa-hamburger fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Special</small>
                                        <h6 class="mt-n1 mb-0">Fast Food</h6>
                                    </div>
                                </a>
                            </li>
                          
                        </ul>
            
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4" id="desi-menu">
                                    </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row g-4" id="fastfood-menu">
                                    </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div>
                      <video src="img/menu/2620043-uhd_3840_2160_25fps.mp4" autoplay loop muted style="width: 100%; height: auto;" ></video>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Order</h5>
                        <h1 class="text-white mb-4">Order Online</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control" id="phone" placeholder="Your phone">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Order Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservation Start -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-comment fa-2x text-primary mb-3"></i>
                        <p>"The best desi food I've had in ages! From the Chicken Biryani to the Zinger Burger, everything was cooked to perfection. The flavors are so authentic, and the service was outstanding. I can’t wait to come back!"</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-user fa-2x text-primary mb-3 rounded-circle"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">— Sadia K.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-comment fa-2x text-primary mb-3"></i>
                        <p>"Mamu Bhanja is my go-to spot for a comforting meal. Their Aloo Gosht is hands down the best I’ve ever had. It’s flavorful, tender, and full of rich spices. The staff is friendly and the atmosphere is warm and inviting!"</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-user fa-2x text-primary mb-3 rounded-circle"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">— Ahmed R.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-comment fa-2x text-primary mb-3"></i>
                        <p>"If you love desi food, you NEED to try Mamu Bhanja. The Beef Biryani is absolutely divine, and I also loved their Broast. Every dish is packed with flavor and the portions are generous. Highly recommend!"</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-user fa-2x text-primary mb-3 rounded-circle"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">— Tariq L.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-comment fa-2x text-primary mb-3"></i>
                        <p>"Mamu Bhanja offers the perfect blend of traditional flavors with a modern touch. I tried the Club Sandwich and was pleasantly surprised at how fresh and delicious it was. Great food, great service, and a welcoming vibe!"</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-user fa-2x text-primary mb-3 rounded-circle"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">— Nida S.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-comment fa-2x text-primary mb-3"></i>
                        <p>"A true gem in the city! I’ve tried almost everything on the menu, but I keep coming back for their Sabzi and Wings. The flavors are rich and authentic, and the service is always fast and friendly. Always a great experience!"</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-user fa-2x text-primary mb-3 rounded-circle"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">— Fahad M.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-comment fa-2x text-primary mb-3"></i>
                        <p>"Mamu Bhanja never disappoints! The Qorma is a must-try, and their Zinger Burger is the perfect blend of crispy and juicy. Plus, the staff makes you feel like family. I love dining here!"</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-user fa-2x text-primary mb-3 rounded-circle"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">— Marium A.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
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