
<?php
// retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// send email
$to = 'shardyms@gmail.com';
$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

// redirect user to thank you page
header('Location: thank_you.html');
exit;
?>
