<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visiter_email.\n".
              "Subject: $subject.\n".
              "Massage: $massage.\n".
              "User Massage: $massage.\n";

$to = '99aprajita@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visiter_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html");




?>