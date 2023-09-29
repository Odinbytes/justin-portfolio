<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // For example, use the mail() function to send an email
    $to = "jabwunza@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    $email_message = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Message sent successfully!";
    } else {
        // Email sending failed
        echo "Message sending failed. Please try again later.";
    }
} else {
    // Handle other HTTP methods or direct access to this script
    echo "Invalid request.";
}
?>


