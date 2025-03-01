<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    echo json_encode([]);
    exit();
}

echo json_encode($_SESSION['cart'] ?? []);

?>