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
      <img src="imgs/DSC00840.JPG" alt="1500W Fog Machine">
      <a href="1500W-Fog-Machine.html"><h2>1500W Fog Machine</h2></a>
      <p class="description">Voltage:AC110/220V,50/60Hz Power: 1500W Warm-up time:3-5min Smoke coverage:2000cu.ft/min Smoke injection time: 25min Weight: 6.8kg Inner box: 52*31*23.5cm</p> 
    </div>
    <div class="product">
      <img src="imgs/DSC00847.JPG" alt="3000W New fog machine with DMX">
      <a href="3000W-New-fog-machine-with-DMX.html"><h2>3000W New fog machine with DMX</h2></a>
      <p class="description">1. Features: Large amount of smoke, long
        2. Control method: wire control + remote control
        3. Voltage: 220v-240v 50-60HZ
        4. Power: 3000w
        5. distance spray 3--5 minutes
        6. Smoke volume: 35000cuft/min
        .....</p>
    </div>
  </div>
  <script src="script1.js"></script>
</body>
</html>
