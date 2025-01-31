<?php
session_start();

// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zadelights";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Query to check if the username exists
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($pass, $row['password'])) {
        // User is authenticated
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user;
        header("Location: index.html");
        exit();
    } else {
        // Authentication failed
        echo "<script>alert('Incorrect details');</script>";
        echo "<p>Invalid username or password. Please try again.</p>";
        echo "<a href='login.html'>Back to Login</a>";
    }
} else {
    // Username not found
    echo "<script>alert('Incorrect details');</script>";
    echo "<p>Invalid username or password. Please try again.</p>";
    echo "<a href='login.html'>Back to Login</a>";
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/logo.jpg" type="image/x-icon">
  <title>Login - Zade Lites</title>
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
      top: 10px;
      right: 20px;
      background: crimson;
      color: white;
      border: none;
      padding: 10px 15px;
      font-size: 1.2rem;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .back-button:hover {
      background-color: darkred;
    }

    /* Login Section */
    .login-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 100px 20px;
      max-width: 400px;
      margin: 0 auto;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
    }

    .login-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .login-header h1 {
      font-size: 2.5rem;
      color: black;
      margin-bottom: 10px;
    }

    .login-header p {
      font-size: 1.4rem;
      color: crimson;
    }

    .login-form {
      width: 100%;
    }

    .login-form label {
      display: block;
      font-size: 1.2rem;
      color: black;
      margin-bottom: 5px;
    }

    .login-form input {
      width: 100%;
      padding: 10px;
      font-size: 1.2rem;
      border: 2px solid black;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .login-form button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 1.4rem;
      color: white;
      background-color: crimson;
      border: none;
      border-radius: 5px;
      text-transform: uppercase;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-form button:hover {
      background-color: darkred;
    }

    .register-link {
      margin-top: 20px;
      text-align: center;
    }

    .register-link a {
      font-size: 1.2rem;
      color: crimson;
      text-decoration: none;
      border-bottom: 2px solid crimson;
      transition: color 0.3s ease, border-color 0.3s ease;
    }

    .register-link a:hover {
      color: darkred;
      border-color: darkred;
    }

    /* Responsive Styles */
    @media only screen and (min-width: 768px) {
      .login-container {
        padding: 120px 20px;
      }
    }
  </style>
</head>

<body>
  <!-- Back Button -->
  <button class="back-button" onclick="window.location.href='index.php'">← Back</button>

  <!-- Login Section -->
  <section class="login-container">
    <div class="login-header">
      <h1>Login</h1>
      <p>Access Your Account</p>
    </div>
    <form class="login-form" action="login_process.php" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit">Login</button>
    </form>
    <div class="register-link">
      <p>Don't have an account?</p>
      <a href="register.html">Register Now</a>
    </div>
  </section>
</body>

</html>
