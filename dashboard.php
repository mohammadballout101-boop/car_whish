<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION["full_name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Car Wash - Dashboard</title>

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
    margin-right: 8px;
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
    background: linear-gradient(120deg, #0879c9, #063c70);
    color: white;
    padding: 35px;
    border-radius: 15px;
    margin-bottom: 30px;
}

.welcome h1 {
    margin-top: 0;
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
        CAR WASH
    </div>

    <a href="logout.php" class="logout">
        <i class="fa-solid fa-right-from-bracket"></i>
        Logout
    </a>
</header>

<div class="container">

    <div class="welcome">
        <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>
        <p>Welcome to Car Wash Management System.</p>
        <p>Keep your car clean and shining!</p>
    </div>

    <div class="cards">

        <div class="card">
            <i class="fa-solid fa-calendar-check"></i>
            <h3>Book a Service</h3>
            <p>Schedule your car wash appointment.</p>
            <a href="booking.php">Book Now</a>
        </div>

        <div class="card">
            <i class="fa-solid fa-list-check"></i>
            <h3>My Bookings</h3>
            <p>View your appointments and bookings.</p>
            <a href="my_bookings.php">View Bookings</a>
        </div>

        <div class="card">
            <i class="fa-solid fa-car"></i>
            <h3>Our Services</h3>
            <p>Discover our available car wash services.</p>
            <a href="services.php">View Services</a>
        </div>

        <div class="card">
            <i class="fa-solid fa-user"></i>
            <h3>My Profile</h3>
            <p>Manage your personal information.</p>
            <a href="profile.php">My Profile</a>
        </div>

    </div>

</div>

<footer>
    © 2026 Car Wash Management System
</footer>

</body>
</html>