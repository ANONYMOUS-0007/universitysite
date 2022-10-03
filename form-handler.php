<?php
$name = $_POST['name']
$visitor_emai = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']


$email_from = 'info@yourwebsite.com';  

$email_subject = 'New Form Submission';


$email_body = "user name: $name.\n".
            "user email: $visitor_emai.\n".
            "subject: $subject.\n".
            "user mesage: $message.\n";

  $to = 'shahfaisal74069@gmail.com';

  $headers = "From: $email_from \r\n";

  $headers = "Reply-To: $visitor_emai \r\n";

  mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>