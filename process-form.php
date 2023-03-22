<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and trim whitespace
    $name = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Set the recipient email address
    $to = "fahadkingx4@gmail.com";

    // Set the email subject
    $email_subject = "New contact form submission: $subject";

    // Build the email message
    $email_body = "Name: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);

    // Redirect to a thank-you page
    header("Location: thank-you.html");
    exit;
}

?>
