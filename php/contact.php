<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];
$formcontent="From: $name \n Message: $description";
$recipient = "";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>