<?php
session_start(); // Start the session to handle login/logout state
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">
    <title>Contact Us - Zade Lites</title>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap';

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: url('img/logo.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Back Button Styles */
        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: crimson;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1.2rem;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: darkred;
        }

        /* Contact Section */
        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 100px 20px;
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-header h1 {
            font-size: 3rem;
            color: black;
            margin-bottom: 10px;
        }

        .contact-header p {
            font-size: 1.6rem;
            color: crimson;
        }

        .contact-form {
            width: 100%;
            max-width: 700px;
        }

        .contact-form label {
            display: block;
            font-size: 1.4rem;
            color: black;
            margin-bottom: 5px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            font-size: 1.4rem;
            border: 2px solid black;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .contact-form textarea {
            height: 150px;
            resize: vertical;
        }

        .contact-form button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.6rem;
            color: white;
            background-color: crimson;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: darkred;
        }

        /* Responsive Styles */
        @media only screen and (min-width: 768px) {
            .contact-form {
                margin-bottom: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>Z</span>ade <span>L</span>ites</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li class="dropdown">
                            <button class="dropbtn"><a href="index.php">Home</a></button>
                        </li>
                        <li class="dropdown">
                            <button class="dropbtn"><a href="products.html">Products</a></button>
                            <div class="dropdown-content">
                                <a href="products/products-led.html" data-after="Service">LED PAR</a>
                                <a href="products/products-cob.html" data-after="Service">COB / Strobe / Blinder</a>
                                <a href="products/products-laser.html" data-after="Service">Laser</a>
                                <a href="products/products-beam.html" data-after="Service">Moving Head - Beam</a>
                                <a href="products/products-effect.html" data-after="Service">Effect Lights</a>
                                <a href="products/products-smoke-machine.html" data-after="Service">Smoke Machine</a>
                                <a href="products/products-controls.html" data-after="Service">Consoles</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <button class="dropbtn"><a href="about.php">About</a></button>
                        </li>
                        <li class="dropdown">
                            <button class="dropbtn"><a href="contact.php">Contact</a></button>
                        </li>
                        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <li class="dropdown">
                            <button class="dropbtn"><a href="logout.php">Logout</a></button>
                        </li>
                        <?php else: ?>
                        <li class="dropdown">
                            <button class="dropbtn"><a href="login.html">Login</a></button>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header Section -->

    <!-- <a href="index.php" class="back-button">← Back</a> Back Button -->
    <section class="contact-container">
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>We'd Love to Hear From You!</p>
        </div>
        <form class="contact-form" action="submit_form.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>
</body>

</html>
