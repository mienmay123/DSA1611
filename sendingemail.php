<?php
date_default_timezone_set('Etc/UTC');
require 'PHPMailer-master/PHPMailerAutoload.php';
//using template
$mail = new PHPMailer;
$mail->isSMTP(); // email protocol
$mail->Host = 'smtp.gmail.com'; // hostname gmail
$mail->Port = 587; // port number
$mail->SMTPSecure = 'tls'; //secure layer
$mail->SMTPAuth = true;
$mail->FromName = "CMM Cloth Shop"; // from who
$mail->Username = "btt121programming@gmail.com"; // gmail username 

//gmail password session
$file = fopen("email.txt","r");
$newpass = fgets($file); // password get from here
fclose($file);
$mail->Password = "$newpass";

//user email address + the name during the message
$mail->addAddress($email, $firstname." ". $lastname);
//email title
$mail->Subject = 'Welcome to become our CMM Cloth Shop Member';
//email content
$mail->msgHTML("<h1>Thank you to join us!<h1>".
"<p>To refer more, please click ".
"<a href='http://localhost/apu/1611/lab8/ExerciseLab/login.php'>here</a>".
"</p>"); 
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    die("<script>alert('Mailer Error: " . $mail->ErrorInfo."');</script>");
} 
   echo "<script>alert('Register Successfully!');";
   echo "window.location.href='login.php';</script>";

?>