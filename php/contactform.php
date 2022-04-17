<?php
  // Check for empty fields
  if(empty($_POST['name'])      ||
    empty($_POST['email'])     ||
    empty($_POST['mobile'])     ||
    empty($_POST['message'])   ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
  {
    echo "No arguments Provided!";
    return false;
  }

  $name = strip_tags(htmlspecialchars($_POST['name']));
  $email_address = strip_tags(htmlspecialchars($_POST['email']));
  $mobile = strip_tags(htmlspecialchars($_POST['mobile']));
  $message = strip_tags(htmlspecialchars($_POST['message']));

  // Create the email and send the message
  $to = 'smartakshat007@gmail.com';
  $email_subject = "Website Contact Form:  $name";
  $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $mobile\n\nMessage:\n$message";
  $headers = "From: noreply@moviemagic.com\n"; // This is the email address the generated message will be from.
  $headers .= "Reply-To: $email_address";
  mail($to,$email_subject,$email_body,$headers);
  return true;
?>
