<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Create email message
    $to = "sujalpatel85113@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed!";
    }
}
?>
