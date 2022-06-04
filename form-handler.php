<?php
$name = $_POST['name']
$visiror_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from ='galalhelany@gmail.com'
$email_subject='new form'
$email_body = "user name: $name .\n".
"user name: $name .\n".
"user email: $visiror_email .\n".
"user subject: $subject .\n".
"user message: $message .\n".;


$to = 'galalhelany@gmail.com';

$headers = "from $email_from \r\n";
$headers = "reply-to : $visiror_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact us.html")


?>