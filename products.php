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
    <title>Products - Zade Lites</title>
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

        /* Products Section */
        .products-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 100px 20px;
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .products-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .products-header h1 {
            font-size: 3rem;
            color: black;
            margin-bottom: 10px;
        }

        .products-header p {
            font-size: 1.6rem;
            color: crimson;
        }

        .product-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .product-category {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-category:hover {
            transform: scale(1.05);
        }

        .product-category h2 {
            font-size: 1.8rem;
            color: crimson;
            margin-bottom: 10px;
        }

        .product-category a {
            font-size: 1.6rem;
            color: black;
            text-decoration: none;
        }

        /* Responsive Styles */
        @media only screen and (min-width: 768px) {
            .product-categories {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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

    <!-- Products Section -->
    <section class="products-container">
        <div class="products-header">
            <h1>Our Products</h1>
            <p>Explore our wide range of lighting solutions for all events.</p>
        </div>
        <div class="product-categories">
            <div class="product-category">
                <h2>LED PAR</h2>
                <a href="products/products-led.html">View Products</a>
            </div>
            <div class="product-category">
                <h2>COB / Strobe / Blinder</h2>
                <a href="products/products-cob.html">View Products</a>
            </div>
            <div class="product-category">
                <h2>Laser</h2>
                <a href="products/products-laser.html">View Products</a>
            </div>
            <div class="product-category">
                <h2>Moving Head - Beam</h2>
                <a href="products/products-beam.html">View Products</a>
            </div>
            <div class="product-category">
                <h2>Effect Lights</h2>
                <a href="products/products-effect.html">View Products</a>
            </div>
            <div class="product-category">
                <h2>Smoke Machine</h2>
                <a href="products/products-smoke-machine.html">View Products</a>
            </div>
            <div class="product-category">
                <h2>Consoles</h2>
                <a href="products/products-controls.html">View Products</a>
            </div>
        </div>
    </section>
</body>

</html>
