<?php

  // Replace with your real receiving email address
  $receiving_email_address = 'sominzex21@gmail.com';

  // Collect form data
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Create email headers
  $headers = "From: $from_name <$from_email>\r\n";
  $headers .= "Reply-To: $from_email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  // Construct the email body
  $email_body = "<strong>From:</strong> $from_name<br>";
  $email_body .= "<strong>Email:</strong> $from_email<br><br>";
  $email_body .= "<strong>Message:</strong><br>";
  $email_body .= nl2br($message);

  // Send the email
  if(mail($receiving_email_address, $subject, $email_body, $headers)) {
    echo 'Your message has been sent. Thank you!';
  } else {
    echo 'There was an error sending your message. Please try again later.';
  }
?>
