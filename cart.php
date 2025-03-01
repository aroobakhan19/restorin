<?php
// cart.php
session_start();
include 'config.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
$userid = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart-Mamoo Bhanja</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>

        body {
            background-color:rgb(252, 233, 204);
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }
        .btn-danger {
            margin-left: 10px;
        }
        #total-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: #28a745;
        }
        .btn-success {
            width: 100%;
            max-width: 200px;
            margin-top: 20px;
        }
    </style>
   
</head>
<body>
<div class="container-xxl py-2 bg-dark hero-header mb-2">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="New-Logo.png" style="width: 150px; height:70px;" alt=""></h1>
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
                            <li>
        <a class="dropdown-item" href="cart.php?user_id=<?= $_SESSION['user_id'] ?>">Cart</a>
        
</li>
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
            </div>   
    <div class="container py-5">
        <h1 class="my-4 text-center">Your Cart</h1>
        <div id="cart-items" class="mb-4">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="text-center">
            <h4 id="total-amount" class="mb-3">Total Amount: Rs 0.00</h4>
            <button onclick="placeOrder()" class="btn btn-success btn-lg">Order Now</button>
        </div>
    </div>
    <script>
        // Load cart items from localStorage
        function loadCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartItemsContainer = document.getElementById('cart-items');
            let totalAmount = 0;

            cartItemsContainer.innerHTML = ''; // Clear previous items

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p class="text-center text-muted">Your cart is empty.</p>';
                return;
            }

            cart.forEach((item, index) => {
                const cartItem = document.createElement('div'); 

                cartItem.classList.add('card', 'mb-3');
                cartItem.innerHTML = `
                    <div class="card-body">
                        <h5 class="card-title">${item.name}</h5>
                        <p class="card-text">Price: Rs ${item.price.toFixed(2)}</p>
                        <div class="d-flex align-items-center">
                            <label for="quantity" class="me-2">Quantity:</label>
                            <input type="number" id="quantity-${index}" value="${item.quantity}" min="1" class="form-control w-25 me-2" onchange="updateQuantity(${index}, this.value)">
                            <button onclick="removeItem(${index})" class="btn btn-danger btn-sm">Remove</button>
                        </div>
                    </div>`;
                cartItemsContainer.appendChild(cartItem);

                totalAmount += item.price * item.quantity;
            });

            document.getElementById('total-amount').innerText = `Total Amount: Rs ${totalAmount.toFixed(2)}`;
        }

        // Update item quantity
        function updateQuantity(index, quantity) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart[index].quantity = parseInt(quantity);
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart(); // Reload cart to update total amount
        }

        // Remove item from cart
        function removeItem(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart(); // Reload cart to update total amount
        }

        // Place order
        function placeOrder() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert('Your cart is empty!');
                return;
            }



            // Send cart data to the server
            fetch('place_order.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(cart)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Order Successful!');
                    localStorage.removeItem('cart'); // Clear the cart
                    loadCart(); // Reload cart to show it's empty
                } else {
                    alert('Failed to place order.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while placing the order.');
            });
        }

        // Load cart items on page load
        document.addEventListener('DOMContentLoaded', loadCart);
    </script>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>