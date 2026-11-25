<?php
// Welcome page - Ballout Aufbereitung
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Ballout Aufbereitung</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f8fc;
            color: #17324d;
        }

        header {
            background: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            color: #0878c9;
            font-size: 24px;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        nav a {
            color: #17324d;
            text-decoration: none;
            font-weight: 600;
        }

        nav a:hover {
            color: #0878c9;
        }

        .hero {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(135deg, #ffffff, #e5f3ff);
        }

        .hero-content {
            max-width: 750px;
        }

        .hero h1 {
            font-size: 46px;
            color: #0878c9;
            margin-bottom: 20px;
        }

        .hero h2 {
            font-size: 25px;
            margin-bottom: 18px;
            color: #17324d;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.8;
            color: #60758a;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 14px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .login-btn {
            background: #0878c9;
            color: white;
        }

        .login-btn:hover {
            background: #065f9f;
        }

        .register-btn {
            border: 2px solid #0878c9;
            color: #0878c9;
        }

        .register-btn:hover {
            background: #0878c9;
            color: white;
        }

        .about {
            padding: 65px 20px;
            text-align: center;
            background: white;
        }

        .about h2 {
            color: #0878c9;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .about p {
            max-width: 700px;
            margin: auto;
            color: #60758a;
            line-height: 1.8;
        }

        footer {
            background: #123451;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 600px) {
            header {
                justify-content: center;
                text-align: center;
            }

            nav {
                justify-content: center;
                gap: 15px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero h2 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">Ballout Aufbereitung</div>

    <nav>
        <a href="welcome.php">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Ballout Aufbereitung</h1>

        <h2>Your Car Deserves the Best Care</h2>

        <p>
            Professional car cleaning and detailing services.
            We care about every detail to keep your car clean,
            fresh and looking its best.
        </p>

        <div class="buttons">
            <a href="login.php" class="btn login-btn">Login</a>
            <a href="register.php" class="btn register-btn">Register</a>
        </div>
    </div>
</section>

<section class="about" id="about">
    <h2>About Us</h2>
    <p>
        Welcome to Ballout Aufbereitung.
        Our goal is to provide quality car cleaning
        and detailing services with care and attention.
    </p>
</section>

<footer id="contact">
    <p>© 2026 Ballout Aufbereitung. All Rights Reserved.</p>
</footer>

</body>
</html>