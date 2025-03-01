<?php
include 'config.php';
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['user_id'])) {
        die("User ID is not set in session.");
    }

    $userid = $_SESSION['user_id']; 
    $address = $_POST['address'];
    $order_details = $_POST['order'];


    $sql = "INSERT INTO `orders` (`user_id`, `address`, `order_details`) VALUES ('$userid','$address','$order_details')";
   $sqlorder = mysqli_query($con, $sql);
   if ($sqlorder) {
    echo "<script>
            alert('Your order has been placed successfully!');
            window.location.href = 'userprofile.php'; // Redirect to profile or another page
          </script>";
} else {
    echo "<script>
            alert('Error placing order. Please try again!');
            window.location.href = 'proccess_order.php'; // Redirect back to order page
          </script>";
}
    header("Location:userprofile.php");
exit();
} 
?>
