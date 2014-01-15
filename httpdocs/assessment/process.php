<?php session_start();
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0) && ($_POST['name']) != 'name') {
	$name = stripslashes(strip_tags($_POST['name']));
} else {    $_SESSION['load'] = name;
            echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Name'); history.back();</script>";
            exit();}
if ((isset($_POST['surname'])) && (strlen(trim($_POST['surname'])) > 0)) {
	$surname = stripslashes(strip_tags($_POST['surname']));
} else {$surname = 'No surname entered';}
if ((isset($_POST['address'])) && (strlen(trim($_POST['address'])) > 0) && ($_POST['address']) != 'address') {
	$address = stripslashes(strip_tags($_POST['address'])) . "\r\n";
    $address .= stripslashes(strip_tags($_POST['address1']));
} else {    $_SESSION['load'] = address;
            echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Address'); history.back();</script>";
            exit();
        }
if ((isset($_POST['postcode'])) && (strlen(trim($_POST['postcode'])) > 0)&& ($_POST['postcode']) != 'post code') {
	$postcode = stripslashes(strip_tags($_POST['postcode']));
} else {    $_SESSION['load'] = postcode;
            echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Post Code'); history.back();</script>";
            exit();
        }
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['email']));
} else {    $_SESSION['load'] = email;
            echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your email'); history.back();</script>";
            exit();
        }
if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0) && ($_POST['phone']) != 'phone') {
	$phone = stripslashes(strip_tags($_POST['phone']));
} else {    $_SESSION['load'] = phone;
            echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Phone Number'); history.back();</script>";
            exit();
        }
if ((isset($_POST['dob'])) && (strlen(trim($_POST['dob'])) > 0)&& ($_POST['dob']) != 'date of birth') {
	$dob = stripslashes(strip_tags($_POST['dob']));
} else {    $_SESSION['load'] = dob;
            echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your date of birth '); history.back();</script>";
            exit();
        }
if ((isset($_POST['resident'])) && (strlen(trim($_POST['resident'])) > 0)) {
	$resident = stripslashes(strip_tags($_POST['resident']));
} 
    elseif (($_POST['resident_det']) != 'Please Enter Details' && (strlen(trim($_POST['resident_det'])) > 0)) {
    $resident = stripslashes(strip_tags($_POST['resident_det']));
	}
    else {  $_SESSION['load'] = resident_det;
            echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Residency Details'); history.back();</script>";
            exit();}
if ((isset($_POST['qual'])) && (strlen(trim($_POST['qual'])) > 0)) {
	$qual = stripslashes(strip_tags($_POST['qual']));
} else {$qual = stripslashes(strip_tags($_POST['qual']));}
if ((isset($_POST['status'])) && (strlen(trim($_POST['status'])) > 0)) {
	$status = stripslashes(strip_tags($_POST['status']));
} else {$status = 'No message entered';}
if ((isset($_POST['claim'])) && (strlen(trim($_POST['claim'])) > 0)) {
	$claim = stripslashes(strip_tags($_POST['claim']));
} else {$claim = 'No message entered';}
if ((isset($_POST['subbox'])) && (strlen(trim($_POST['subbox'])) > 0)) {
	$subbox = stripslashes(strip_tags($_POST['subbox']));
} else {$subbox = 'No message entered';}
?>
<?php
echo '<a name="top">';
echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
echo '<div class="bluset" style="margin: 10px; align: center; width: auto; font-size: 4em; top: 30%;">Your details are being processed, We will get in touch with you shortly!! Thanks.</div><br/>';	
echo '<p id="hide" style="margin: 10px; align: center; width: auto;">You will be redirected in 10 seconds</p><br/>';
echo '</a>';
echo " <script language='javascript'> window.location.href = location.href + '#top';</script>";?>
<script type="text/javascript">
function showIt() {
  //document.getElementById("hide").style.visibility = "visible";
  window.top.location.href = 'http://www.micomputsolutions.co.uk/courses.php';
  document.getElementById("hide").innerHTML = window.top.location.href;
}
setTimeout("showIt()", 10000); // after 10 sec
</script>
<?php
$courseName = $_SESSION['courseName'];
$mailto  = "training@micomputsolutions.co.uk";
$subject = "ELIGIBILITY FORM: " . strip_tags($courseName);

$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "CC: micomputsolutions@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$courseName = $_SESSION['courseName'];
$mailto  = "training@micomputsolutions.co.uk";

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Surname:</strong> </td><td>" . strip_tags($surname) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Course:</strong> </td><td>" . strip_tags($courseName) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
$message .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($address) . "</td></tr>";
$message .= "<tr><td><strong>Post Code:</strong> </td><td>" . strip_tags($postcode) . "</td></tr>";
$message .= "<tr><td><strong>Date of Birth:</strong> </td><td>" . strip_tags($dob) . "</td></tr>";
$message .= "<tr><td><strong>Resident Status:</strong> </td><td>" . strip_tags($resident) . "</td></tr>";
$message .= "<tr><td><strong>Qualification:</strong> </td><td>" . strip_tags($qual) . "</td></tr>";
$message .= "<tr><td><strong>Employment Status:</strong> </td><td>" . strip_tags($status) . "</td></tr>";
$message .= "<tr><td><strong>Funding Status:</strong> </td><td>" . strip_tags($claim) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

mail($mailto, $subject, $message, $headers);
?>
<?php
require ('../connect/config.php');
if ($subbox !== 'undefined') {
$sql="INSERT INTO subscription_list (name, email, phone, address, postcode, date)
VALUES ('$name $surname','$email','$phone','$address','$postcode', NOW())
on duplicate key update phone='$phone',address='$address',postcode='$postcode',date=NOW();";
}
if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($link)	
?>
<?php
	session_unset();
    session_destroy();
?>