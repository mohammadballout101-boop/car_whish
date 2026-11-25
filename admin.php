<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION["role"] !== "admin") {
    header("Location: dashboard.php");
    exit;
}

$adminName = $_SESSION["full_name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard - Car Wash</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f1f5f9;
}

header {
    background: #082b4c;
    color: white;
    padding: 20px 6%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.logo {
    font-size: 23px;
    font-weight: bold;
}

.logo i {
    color: #29a9ff;
}

.logout {
    background: #e63946;
    color: white;
    text-decoration: none;
    padding: 10px 17px;
    border-radius: 8px;
}

.container {
    padding: 35px 6%;
}

.welcome {
    background: linear-gradient(120deg, #063c70, #0879c9);
    color: white;
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    padding: 30px 20px;
    border-radius: 14px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card i {
    font-size: 40px;
    color: #0879c9;
    margin-bottom: 15px;
}

.card h3 {
    color: #082b4c;
}

.card p {
    color: #777;
}

.card a {
    display: inline-block;
    background: #0879c9;
    color: white;
    text-decoration: none;
    padding: 11px 20px;
    border-radius: 8px;
    margin-top: 10px;
}

.card a:hover {
    background: #064d80;
}

footer {
    text-align: center;
    padding: 20px;
    color: #777;
}
</style>
</head>

<body>

<header>
    <div class="logo">
        <i class="fa-solid fa-car-side"></i>
        CAR WASH ADMIN
    </div>

    <a href="logout.php" class="logout">
        <i class="fa-solid fa-right-from-bracket"></i>
        Logout
    </a>
</header>

<div class="container">

    <div class="welcome">
        <h1>
            <i class="fa-solid fa-user-shield"></i>
            Welcome Admin,
            <?php echo htmlspecialchars($adminName); ?>!
        </h1>

        <p>Manage your Car Wash Management System.</p>
    </div>

    <div class="cards">

        <div class="card">
            <i class="fa-solid fa-calendar-check"></i>
            <h3>Manage Bookings</h3>
            <p>View and manage customer appointments.</p>
            <a href="manage_bookings.php">Manage</a>
        </div>

        <div class="card">
            <i class="fa-solid fa-users"></i>
            <h3>Manage Customers</h3>
            <p>View registered customers.</p>
            <a href="manage_users.php">Manage</a>
        </div>

        <div class="card">
            <i class="fa-solid fa-car"></i>
            <h3>Manage Services</h3>
            <p>Add, edit and delete car wash services.</p>
            <a href="manage_services.php">Manage</a>
        </div>

        <div class="card">
            <i class="fa-solid fa-chart-line"></i>
            <h3>Reports</h3>
            <p>View system reports and statistics.</p>
            <a href="reports.php">View Reports</a>
        </div>

    </div>

</div>

<footer>
    © 2026 Car Wash Management System
</footer>

</body>
</html>