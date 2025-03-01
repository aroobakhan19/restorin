<?php
// remove_from_cart.php
session_start();
include 'config.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $cart_id = $_GET['id'];
    $userid = $_SESSION['user_id']; // User ID from session

    // Delete item from cart
    $sql = "DELETE FROM cart WHERE id = ? AND user_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ii", $cart_id, $userid);
    $stmt->execute();
}

header("Location: cart.php"); // Redirect back to cart page
exit();