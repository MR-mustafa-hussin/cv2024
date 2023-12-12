<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set recipient email address
  $recipient = "v18abassiouny@gmail.com";

  // Set email subject
  $subject = "New form submission";

  // Build email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message: $message\n";

  // Set additional email headers
  $headers = "From: $name <$email>";

  // Send email
  if (mail($recipient, $subject, $email_content, $headers)) {
    // Email sent successfully
    echo "Thank you for your message. We'll get back to you soon!";
  } else {
    // Error sending email
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>
