<?php
include 'config.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Check if user is admin
if ($_SESSION['role'] !== "admin") {
    echo "<h2 style='text-align:center; color:red;'>Access Denied! Only Admin Can View Orders.</h2>";
    exit();
}

// Fetch orders with user details using JOIN
$sql = "SELECT orders.*, users.name, users.email, users.phone 
        FROM orders 
        INNER JOIN users ON orders.user_id = users.id 
        ORDER BY orders.order_date DESC";

$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Mamu Bhanja</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
       /* Sidebar Styling */
.sidebar {
    width: 200px;
    background: rgb(255, 189, 91);
    color: white;
    min-height: 100vh;
    padding-top: 20px;
    position: fixed;
    transition: all 0.3s ease-in-out;
    z-index: 1000;
}

.sidebar a {
    padding: 12px 20px;
    display: block;
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.sidebar a:hover {
    background: #495057;
}

.sidebar .active {
    background: #007bff;
}

.sidebar-toggler {
    display: none;
}

/* Content Styling */
.content {
    margin-left: 12%;
    padding: 20px;
    transition: all 0.3s ease-in-out;
    z-index: 500;
}

/* Top Navbar */
.topbar {
    background: rgb(255, 189, 91);
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    z-index: 1000;
    position: fixed;
    top: 0;
    left: 0;
}

.topbar .menu-btn {
    display: none;
    font-size: 22px;
    cursor: pointer;
}

.topbar div {
    display: flex;
    align-items: center;
}

.topbar .btn {
    margin-left: 15px;
}

/* Sidebar Toggle when menu button is clicked */
.sidebar.open {
    width: 250px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        width: 0;
        overflow: hidden;
    }
    .sidebar.open {
        width: 250px;
    }

    .content {
        margin-left: 0;
        width: 100%;
    }

    .topbar .menu-btn {
        display: block;
    }

    .topbar .btn {
        margin-top: 10px;
    }

    .sidebar a {
        padding: 12px 10px;
        font-size: 14px;
    }
    .head{
       display: none; 
    }
}

    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="cart_data.php"><i class="fas fa-shopping-cart"></i> Cart Data</a>
        <a href="admin.php"><i class="fas fa-users"></i> Orders</a>
        <a href="logout.php" class="text-white"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
        
        <!-- Top Navbar -->
        <div class="topbar">
            <span class="menu-btn" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </span>
            <div>
                <span>Welcome, <?= $_SESSION['uname']; ?> </span>
                <a href="logout.php" class="btn btn-danger btn-sm ms-3">Logout</a>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="container mt-4">
            <h2 class=" head text-center" style="margin-top: 5%;">All Orders</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Order Details</th>
                            <th>Address</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if (mysqli_num_rows($result) > 0) {
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <td>{$count}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['phone']}</td>
                                        <td>{$row['order_details']}</td>
                                        <td>{$row['address']}</td>
                                        <td>{$row['order_date']}</td>
                                      </tr>";
                                $count++;
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>No orders found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sidebar Toggle Script -->
    <script>
        function toggleSidebar() {
            let sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");
        }
    </script>
    </body>
</html>
