<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@service.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject".
             "User Message: $message.\n";

$to = 'your_emailid_to_recived@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");




?>