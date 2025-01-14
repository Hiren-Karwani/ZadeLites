<?php
session_start();

// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set
if (isset($_POST['username'], $_POST['password'], $_POST['confirm_password'])) {
    // Get form data
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    // Basic validation
    if (empty($user) || empty($pass) || empty($confirm_pass)) {
        echo "<p>Please fill in all fields.</p>";
        echo "<a href='register.html'>Back to Register</a>";
        exit();
    }

    if ($pass !== $confirm_pass) {
        echo "<p>Passwords do not match. Please try again.</p>";
        echo "<a href='register.html'>Back to Register</a>";
        exit();
    }

    // Hash the password
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Check if username already exists
    $sql = "SELECT * FROM users WHERE username='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<p>Username already exists. Please choose another one.</p>";
        echo "<a href='register.html'>Back to Register</a>";
        exit();
    }

    // Insert new user into database
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$hashed_pass')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user;
        header("Location: login.php");
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        echo "<a href='register.html'>Back to Register</a>";
    }

} else {
    echo "<p>Invalid request.</p>";
    echo "<a href='register.html'>Back to Register</a>";
}

$conn->close();
?>
