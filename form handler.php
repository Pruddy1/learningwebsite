<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$interest = $_POST['interest'];
$message = $_POST['message'];
$email_from = 'matlc@yourwebsite.com';
$email_interest = 'New Form Submission';
$email_body = "User Name: $name.\n". 
              "User Email: $visitor_email.\n". 
              "Interest: $interest.\n". 
              "User Message: $message .\n";
$to = 'oreoluwadada6@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_interest,$email_body,$headers);
header("Location: content.html.html");
?>