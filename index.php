<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/logo.jpg" type="image/x-icon">
  <title>Zade Lights</title>
  <style>
    @import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';

    /* Products */
    .product {
        margin-bottom: 20px; /* Add space between product containers */
        margin-left: 20px;
        margin-top: 20px;
        margin-right: 20px;
    }
  </style>
</head>

<body>
  <!-- Header -->
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
              <button class="dropbtn"><a href="About.html">About</a></button>
            </li>
            <li class="dropdown">
              <button class="dropbtn"><a href="contact.html">Contact</a></button>
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
  <!-- End Header -->

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Welcome <span></span></h1>
        <h1>To <span></span></h1>
        <h1>ZadeLites <span></span></h1>
        <a href="products.html" type="button" class="cta">Products</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>us</span></h1>
        <h2>Illuminating Your Events with Excellence</h2>
        <p>At Zade Lites, our mission is to bring your events to life with innovative lighting solutions. We are dedicated to offering a wide range of products that meet the highest standards of quality and performance, ensuring that your events shine bright.</p>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1><a href="tel:8452930292">Phone</a></h1>
            <h2>Call <a href="tel:8452930292">8452930292</a> for any queries</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1><a href="mailto:zadelites@gmail.com">Email</a></h1>
            <h2><a href="mailto:zadelites@gmail.com">zadelites@gmail.com</a></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info"> 
            <h1><a href="https://maps.app.goo.gl/Mw8BLfT7hPx12F496" target="_blank">Address</a></h1>
            <h2><a href="https://maps.app.goo.gl/Mw8BLfT7hPx12F496" target="_blank">63, 1ST FLOOR, PLOT 339
              RAJESH BUILDING
              OPP. BHADKAMKAR MARG POLICE STATION
              DR. D B MARG, GRANT ROAD EAST
              MUMBAI 400007.</a></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>Z</span>ade <span>L</span>ites</h1>
      </div>
      <h2>Tag Line</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/zadelites?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
      </div>
      <p>Copyright © 2024. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

  <script>
    const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
    const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
    const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
    const header = document.querySelector('.header.container');

    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      mobile_menu.classList.toggle('active');
    });

    document.addEventListener('scroll', () => {
      var scroll_position = window.scrollY;
      if (scroll_position > 250) {
        header.style.backgroundColor = '#29323c';
      } else {
        header.style.backgroundColor = 'transparent';
      }
    });

    menu_item.forEach((item) => {
      item.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');
      });
    });
  </script>
</body>

</html>
