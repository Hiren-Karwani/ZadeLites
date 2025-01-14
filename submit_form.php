<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        die('Please fill in all fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Recipient email address
    $to = '2021.hiren.karwani@ves.ac.in'; // Replace with your email address

    // Subject of the email
    $subject = 'Contact Form Submission from ' . $name;

    // Email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        // Redirect to thank you page or display success message
        header('Location: thank_you.html'); // Create this page to thank users
        exit();
    } else {
        die('Sorry, something went wrong. Please try again later.');
    }
} else {
    // Redirect to contact page if accessed directly
    header('Location: contact.html');
    exit();
}
?>
