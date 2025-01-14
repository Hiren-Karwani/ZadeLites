<?php
// Database connection settings
include('db_connection.php');

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
            echo "<script>
                    alert('Thank you for your feedback!');
                    setTimeout(function() {
                        window.location.href = 'index.html';
                    }, 1000); 
                  </script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='contact.html';</script>";
        }

        // Close statement
        $stmt->close();
    }
}

// Close connection
$conn->close();
?>
