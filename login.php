<?php
session_start();
require_once "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {

            session_regenerate_id(true);

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["full_name"] = $user["full_name"];
            $_SESSION["role"] = $user["role"];

            if ($user["role"] == "admin") {
                header("Location: admin.php");
                exit;
            } else {
                header("Location: dashboard.php");
                exit;
            }

        } else {
            $error = "Incorrect password!";
        }

    } else {
        $error = "Account not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Wash - Login</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #071b33, #0879c9);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-box {
    background: white;
    width: 90%;
    max-width: 400px;
    padding: 35px;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    text-align: center;
}

.logo {
    font-size: 55px;
    color: #0879c9;
}

h1 {
    color: #082b4c;
    margin-bottom: 8px;
}

p {
    color: #777;
}

.input-box {
    position: relative;
    margin: 20px 0;
}

.input-box i {
    position: absolute;
    left: 15px;
    top: 15px;
    color: #0879c9;
}

input {
    width: 100%;
    padding: 14px 14px 14px 42px;
    border: 1px solid #ccc;
    border-radius: 9px;
    font-size: 15px;
}

button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 9px;
    background: #0879c9;
    color: white;
    font-size: 17px;
    cursor: pointer;
}

button:hover {
    background: #064d80;
}

.error {
    color: red;
    margin-bottom: 15px;
}
</style>
</head>

<body>

<div class="login-box">

    <div class="logo">
        <i class="fa-solid fa-car-side"></i>
    </div>

    <h1>CAR WASH</h1>
    <p>Welcome Back! Please Login</p>

    <?php if ($error != ""): ?>
        <div class="error">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <form method="POST">

        <div class="input-box">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email"
            placeholder="Email Address" required>
        </div>

        <div class="input-box">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password"
            placeholder="Password" required>
        </div>

        <button type="submit">
            <i class="fa-solid fa-right-to-bracket"></i>
            Login
        </button>

    </form>

</div>

</body>
</html>