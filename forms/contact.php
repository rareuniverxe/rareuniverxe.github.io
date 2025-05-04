<?php
// Clean Contact Form Script for Ranjith Aleti's Portfolio

// Change this to your receiving email address
$to = "ranjithaleti@gmail.com";

// Collect form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

// Email content
$email_subject = "New Contact Form Submission: " . $subject;
$email_body = "You have received a new message from your portfolio website.\n\n";
$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Message:\n" . $message;

// Email headers
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// Send the email
if(mail($to, $email_subject, $email_body, $headers)) {
    echo "Your message has been sent successfully.";
} else {
    echo "Sorry, there was a problem sending your message.";
}
?>