<?php
if(isset( $_POST['Name']))
$name = $_POST['Name'];
if(isset( $_POST['Email']))
$email = $_POST['Email'];
if(isset( $_POST['Message']))
$messagecontent = $_POST['Message'];
if(isset( $_POST['form-name']))
$formname = $_POST['form-name'];



$content="From: $name\r\n Message: $messagecontent\r\n Form: $formname\r\n ";
$recipient = "louissentinella@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>