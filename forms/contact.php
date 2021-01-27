<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$toEmail = "peter.zhu.95@gmail.com";
$mailHeaders = "From: " . $name . "<". $email .">\r\n";
if(mail($toEmail, $subject, $message, $mailHeaders)) {
    $message = "Your contact information is received successfully.";
    $type = "success";
}
?>