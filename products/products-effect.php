<?php
session_start(); // Start the session to handle login/logout state
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../img/logo.jpg" type="image/x-icon">
  <title>Products</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="../index.html">
            <h1><span>Z</span>ade <span>L</span>ites</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li class="dropdown">
              <button class="dropbtn"><a href="../index.html">Home</a></button>
            <li class="dropdown">
              <button class="dropbtn"><a href="../products.html">Products</a></button>
              <div class="dropdown-content">
                <a href="products-led.html" data-after="Service">LED PAR</a>
                <a href="products-cob.html" data-after="Service">COB / Strobe / Blinder</a>
                <a href="products-laser.html" data-after="Service">Laser</a>
                <a href="products-beam.html" data-after="Service">Moving Head - Beam</a>
                <a href="products-effect.html" data-after="Service">Effect Lights</a>
                <a href="products-smoke-machine.html" data-after="Service">Smoke Machine</a>
                <a href="products-controls.html" data-after="Service">Controls</a>
            <li class="dropdown">
              <button class="dropbtn"><a href="../about.html">About</a></button>
            <li class="dropdown">
              <button class="dropbtn"><a href="../contact.html">Contact</a></button>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <li class="dropdown">
              <button class="dropbtn"><a href="../logout.php">Logout</a></button>
            </li>
            <?php else: ?>
            <li class="dropdown">
              <button class="dropbtn"><a href="../login.html">Login</a></button>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <div class="container">
    <div class="product">
      <img src="imgs/DSC00832.JPG" alt="7-Halo hexa LED pixel light">
      <a href="7-Halo.html"><h2>7-Halo hexa LED pixel light</h2></a>
      <p class="description">7-Halo hexa LED pixel light</p> 
    </div>
    <div class="product">
      <img src="imgs/DSC00782.JPG" alt=" 9-eye matrix">
      <a href=" 9-eye-matrix.html"><h2> 9-eye matrix</h2></a>
      <p class="description">Voltage: AC100-240V 50/60Hz
        Power: 100W
        Light source: 9*10W RGBW 4IN1 LED
        Optional for .......
        </p>
    </div>
    <div class="product">
      <img src="imgs/DSC00800.JPG" alt=" 25-eye matrix">
      <a href="25-eye matrix.html"><h2>25-eye matrix</h2></a>
      <p class="description">Voltage: AC100-240V 50/60Hz
        Power: 300W
        Light source: 25*10W RGB four in one LED beads
        Optional .....</p>
    </div>
    <div class="product">
        <img src="imgs/DSC00777.JPG" alt="Maple leaves rotate retro lights">
        <a href="Maple-leaves-rotate-retro-lights.html"><h2>Maple leaves rotate retro lights</h2></a>
        <p class="description"> Maple leaves rotate retro lights</p> 
      </div>
  </div>
  <script src="script1.js"></script>
</body>
</html>
