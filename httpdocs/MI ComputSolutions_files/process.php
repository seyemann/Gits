<?php session_start();
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['name']));
} else {$name = 'No name entered';}
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['email']));
} else {$email = 'No email entered';}
if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) {
	$phone = stripslashes(strip_tags($_POST['phone']));
} else {$phone = 'No phone entered';}
if ((isset($_POST['address'])) && (strlen(trim($_POST['address'])) > 0)) {
	$address = stripslashes(strip_tags($_POST['address']));
} else {$address = 'No address entered';}
if ((isset($_POST['postcode'])) && (strlen(trim($_POST['postcode'])) > 0)) {
	$postcode = stripslashes(strip_tags($_POST['postcode']));
} else {$postcode = 'No post code entered';}
if ((isset($_POST['message'])) && (strlen(trim($_POST['message'])) > 0)) {
	$mesage = stripslashes(strip_tags($_POST['message']));
} else {$mesage = 'No message entered';}
if ((isset($_POST['subbox'])) && (strlen(trim($_POST['subbox'])) > 0)) {
	$subbox = stripslashes(strip_tags($_POST['subbox']));
} else {$subbox = 'No message entered';}
?>
<?php
$mailto  = "misolutions@btinternet.com, info@micomputsolutions.co.uk";
$subject = $_SESSION[form];
$headers = "From: " . strip_tags($email) . "\r\n";
/** $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; **/
$headers .= "Name:" . strip_tags($name) . "\r\n";
$headers .= "Phone:" . strip_tags($phone) . "\r\n";
$headers .= "Address:" . strip_tags($address) . "\r\n";
$headers .= "Post Code:" . strip_tags($postcode) . "\r\n";
$headers .= "Enquiry:" . strip_tags($mesage) . "\r\n";
ini_set ("sendmail_from", $email);
mail($mailto, $subject, $headers, $message);
?>
<?php
require ('../connect/config.php');
if ($subbox !== 'undefined') {
$sql="INSERT INTO subscription_list (name, email, phone, address, postcode, date)
VALUES ('$name','$email','$phone','$address','$postcode', NOW())
on duplicate key update phone='$phone',date=NOW();";
}
if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($link)	
?>