<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Please fill in all fields.'); window.location.href='contact.html';</script>";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        // Execute the query
        if ($stmt->execute()) {
            // Close statement
            $stmt->close();

            // Show alert and redirect
            echo "<script>
                    alert('Thank you for your feedback!');
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 2000); // Redirect after 2 seconds
                  </script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='contact.html';</script>";
        }
    }
}

// Close connection
$conn->close();
?>
