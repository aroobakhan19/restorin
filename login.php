<?php
    session_start();
    require 'config.php';
    if (isset($_POST['submit'])) {
        $em = $_POST['email'];
        $pass = $_POST['password'];


        // Validating USer
        $sql = "SELECT * FROM `users` WHERE `email`  = '$em' AND `password` = '$pass' ";
        $uservalidate = mysqli_query($con, $sql);





        // Admin Login
        if ($em == "admin@gmail.com" && $pass == "admin123") {
            // Set session for admin
            $_SESSION['loggedin'] = true;
            $_SESSION['role']= "admin";
            $_SESSION['uname'] = "Admin";  // Set admin name
            $_SESSION['uemail'] = "admin@gmail.com"; 
            $_SESSION['phonenum'] ="03102777156";



            // Redirect to Admin page
            header('Location: admin.php');
            exit();  // Stop script execution after redirect
        }
        // Admin Login

        $userdata = mysqli_fetch_assoc($uservalidate);

        if ($uservalidate) {
            $unum = mysqli_num_rows($uservalidate);

            if ($unum == 1) {
                // Fetch user details
                // Fetch Name column

                // Set session variables
                $_SESSION['loggedin'] = true;
                $_SESSION['role']= "user";
                $_SESSION['user_id'] = $userdata['id'];
                $_SESSION['uname'] = $userdata['name'];  // Set admin name
                $_SESSION['uemail'] = $userdata['email']; 
                $_SESSION['phonenum'] =$userdata['phone'];

                // Redirect to wel.php
                header('Location:userprofile.php');
                exit();  // Stop script execution after redirect
                
            } else {
                // Invalid login
                echo "Login failed. Invalid credentials.";
            }

            // Check if it's an admin login

        } else {
            // Handle query failure
            echo "Error in query: " . mysqli_error($con);
        }

    }
    ?>

<!DOCTYPE html>
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
            <h3 class="text-center mb-4">Login First</h3>
            <form action="login.php" method="post" onsubmit="return validateLoginForm()">
    <!-- Email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        <small id="emailError" class="text-danger"></small>
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        <small id="passwordError" class="text-danger"></small>
    </div>

    <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
</form>
            <p class="text-center mt-3">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>

    <script>
function validateLoginForm() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");

    // Reset previous errors
    emailError.innerText = "";
    passwordError.innerText = "";

    // Email validation (standard format)
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        emailError.innerText = "Invalid email format (e.g., user@example.com)";
        return false;
    }

    // Password validation (at least 6 characters, 1 letter, 1 number)
    let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    if (!passwordPattern.test(password)) {
        passwordError.innerText = "Password must be at least 6 characters long and contain letters and numbers.";
        return false;
    }

    return true;
}
</script>
</body>
</html>
