<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['emailInfo'];
    $phone = $_POST['phoneInfo'];
    $message = $_POST['messageInfo'];

    // Create the email content
    $to = "example@whatever.com"; 
    $subject = "Contact Form Submission";
    $body = "First Name: $firstName\n" .
            "Last Name: $lastName\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo '<div class="alert alert-success" role="alert">
                Thank you! Your message has been sent successfully.
              </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Sorry, there was an error sending your message. Please try again later.
              </div>';
    }
}
?>