<?php
// place_order.php
session_start();
include 'config.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$userid = $_SESSION['user_id']; // Get user ID from session     juiknhnnbh

// Get cart data from the request body
$input = file_get_contents('php://input');         
$cart = json_decode($input, true);

if (empty($cart)) {
    echo json_encode(['success' => false, 'message' => 'Cart is empty']);
    exit();
}

// Insert cart items into the database
try {
    $con->begin_transaction(); // Start transaction

    foreach ($cart as $item) {
        $item_name = $item['name'];
        $price = $item['price'];
        $quantity = $item['quantity'];

        // Insert into cart table
        $sql = "INSERT INTO cart (user_id, item_name, price, quantity) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("isdi", $userid, $item_name, $price, $quantity);
        $stmt->execute();
    }

    $con->commit(); // Commit transaction
    echo json_encode(['success' => true, 'message' => 'Order placed successfully']);
} catch (Exception $e) {
    $con->rollback(); // Rollback transaction on error
    echo json_encode(['success' => false, 'message' => 'Failed to place order: ' . $e->getMessage()]);
}

$stmt->close();
$con->close();
?>