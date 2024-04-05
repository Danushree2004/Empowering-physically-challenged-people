<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email address where the message will be sent
    $to = "your-email@example.com";

    // Subject of the email
    $subject = "Message from Contact Form";

    // Construct the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $email_message)) {
        // Email sent successfully
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        // Error occurred while sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the request method is not POST, redirect back to the contact page
    header("Location: contact.html");
    exit();
}
?>
