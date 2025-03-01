<?php
// update_cart.php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userid = $_SESSION['user_id']; // User ID from session

    foreach ($_POST['quantity'] as $cart_id => $quantity) {
        $sql = "UPDATE cart SET quantity = ? WHERE id = ? AND user_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("iii", $quantity, $cart_id, $user_id);
        $stmt->execute();
    }

    header("Location: cart.php"); // Redirect back to cart page
    exit();
}