<?PHP
include("config.php");

if (isset($_POST['submit'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $ph = $_POST['phone'];
    $p = $_POST['password'];

    $sql = "INSERT INTO `users`(`name`, `email`,`phone`, `password`) VALUES ('$n','$e','$ph','$p')";
$validate = mysqli_query($con, $sql);
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Restoran - Bootstrap Restaurant Template</title>
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
        <style>
            
        </style>
    </head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        
        <div class="card p-4 shadow-lg" style="width: 350px;">
            <h3 class="text-center mb-4">Signup First</h3>
            <form action="signup.php" method="post">
    <!-- Full Name -->
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" 
            pattern="^[A-Za-z\s]{3,50}$" 
            title="Name should only contain letters and be between 3 to 50 characters." 
            required>
    </div>

    <!-- Email Address -->
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" 
            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" 
            title="Enter a valid email address (e.g., user@example.com)" 
            required>
    </div>

    <!-- Phone Number -->
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" 
            pattern="^\+?[0-9]{10,15}$" 
            title="Phone number should be 10 to 15 digits and can start with +" 
            required>
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" 
            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" 
            title="Password must be at least 6 characters long and contain letters and numbers." 
            required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary w-100">Sign Up</button>
</form>

            <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>