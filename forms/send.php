<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form fields and remove whitespace
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  // Set the recipient email address
  $to = "shardyms@gmail.com";

  // Set the email subject
  $subject = "New message from $name";

  // Build the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n\n";
  $email_content .= "Message:\n$message\n";

  // Build the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $email_content, $headers)) {
    // Email sent successfully
    echo "Thank you for your message!";
  } else {
    // Email failed to send
    echo "Oops! Something went wrong and we couldn't send your message.";
  }
}
?>
