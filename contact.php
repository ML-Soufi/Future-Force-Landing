<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace this with the actual recipient email address
    $to = "contact@futureforce.ma";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $emailMessage = "Full Name: $fullName\n";
    $emailMessage .= "Phone Number: $phoneNumber\n";
    $emailMessage .= "Email: $email\n\n";
    $emailMessage .= "Message:\n$message";

    if (mail($to, $subject, $emailMessage, $headers)) {
        // If email sent successfully, show popup and redirect
        echo '<script>alert("Email sent successfully!");</script>';
        echo '<script>window.location.href = "your_page.php";</script>';
        exit;
    } else {
        echo "Error sending email. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
