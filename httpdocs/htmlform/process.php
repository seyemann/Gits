<?php session_start();
if ((isset($_POST['element_518104c63a5a6'])) && (strlen(trim($_POST['element_518104c63a5a6'])) > 0) && ($_POST['element_518104c63a5a6']) != 'name') {
	$name = stripslashes(strip_tags($_POST['element_518104c63a5a6']));
} else {    echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Name'); history.back();</script>";
            exit();}
if ((isset($_POST['element_5181050e6794c'])) && (strlen(trim($_POST['element_5181050e6794c'])) > 0)) {
	$surname = stripslashes(strip_tags($_POST['element_5181050e6794c']));
} else {$surname = 'No surname entered';}
if ((isset($_POST['element_51810719311ca'])) && (strlen(trim($_POST['element_51810719311ca'])) > 0) && ($_POST['element_51810719311ca']) != 'address') {
	$address = stripslashes(strip_tags($_POST['element_51810719311ca']));
} else {    echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Address'); history.back();</script>";
            exit();
        }
if ((isset($_POST['element_518107f9c92b4'])) && (strlen(trim($_POST['element_518107f9c92b4'])) > 0)&& ($_POST['element_518107f9c92b4']) != 'post code') {
	$postcode = stripslashes(strip_tags($_POST['element_518107f9c92b4']));
} else {    echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Post Code'); history.back();</script>";
            exit();
        }
if ((isset($_POST['element_5181059a903c5'])) && (strlen(trim($_POST['element_5181059a903c5'])) > 0)&& ($_POST['element_5181059a903c5']) != 'date of birth') {
	$dob = stripslashes(strip_tags($_POST['element_5181059a903c5']));
} else {    echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your date of birth '); history.back();</script>";
            exit();
        }
if ((isset($_POST['element_518109e32c206'])) && (strlen(trim($_POST['element_518109e32c206'])) > 0)&& ($_POST['element_518109e32c206']) != 'email') {
	$email = stripslashes(strip_tags($_POST['element_518109e32c206']));
} else {    echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your email'); history.back();</script>";
            exit();
        }
if ((isset($_POST['element_51810989a8cdf'])) && (strlen(trim($_POST['element_51810989a8cdf'])) > 0) && ($_POST['element_51810989a8cdf']) != 'phone') {
	$phone = stripslashes(strip_tags($_POST['element_51810989a8cdf']));
} else {    echo '<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />';
            echo " <script language='javascript'> alert('Please Enter your Phone Number'); history.back();</script>";
            exit();
        }
        
if ((isset($_POST['access2learners'])) && (strlen(trim($_POST['access2learners'])) > 0)) {
	$access2learners = stripslashes(strip_tags($_POST['access2learners']));
} else {$access2learners = 'No message entered';}
if ((isset($_POST['assessxp'])) && (strlen(trim($_POST['assessxp'])) > 0)) {
	$assessxp = stripslashes(strip_tags($_POST['assessxp']));
} else {$assessxp = 'No message entered';}
if ((isset($_POST['glh'])) && (strlen(trim($_POST['glh'])) > 0)) {
	$glh = stripslashes(strip_tags($_POST['glh']));
} else {$glh = 'No message entered';}
if ((isset($_POST['claim'])) && (strlen(trim($_POST['claim'])) > 0)) {
	$claim = stripslashes(strip_tags($_POST['claim']));
} else {$claim = 'No message entered';}
if ((isset($_POST['crossref'])) && (strlen(trim($_POST['crossref'])) > 0)) {
	$crossref = stripslashes(strip_tags($_POST['crossref']));
} else {$crossref = 'No message entered';}
if ((isset($_POST['stand'])) && (strlen(trim($_POST['stand'])) > 0)) {
	$stand = stripslashes(strip_tags($_POST['stand']));
} else {$stand = 'No message entered';}
if ((isset($_POST['code'])) && (strlen(trim($_POST['code'])) > 0)) {
	$code = stripslashes(strip_tags($_POST['code']));
} else {$code = 'No message entered';}
if ((isset($_POST['actionplan'])) && (strlen(trim($_POST['actionplan'])) > 0)) {
	$actionplan = stripslashes(strip_tags($_POST['actionplan']));
} else {$actionplan = 'No message entered';}
if ((isset($_POST['method'])) && (strlen(trim($_POST['method'])) > 0)) {
	$method = stripslashes(strip_tags($_POST['method']));
} else {$actionplan = 'No message entered';}
if ((isset($_POST['verifier'])) && (strlen(trim($_POST['verifier'])) > 0)) {
	$verifier = stripslashes(strip_tags($_POST['verifier']));
} else {$verifier = 'No message entered';}
if ((isset($_POST['cover_letter'])) && (strlen(trim($_POST['cover_letter'])) > 0)) {
	$cover_letter = stripslashes(strip_tags($_POST['cover_letter']));
} else {$cover_letter = 'No message entered';}
?>
<script type="text/javascript">
function showIt() {
  //document.getElementById("hide").style.visibility = "visible";
  window.top.location.href = 'http://www.micomputsolutions.co.uk/courses.php';
  document.getElementById("hide").innerHTML = window.top.location.href;
}
setTimeout("showIt()", 13000); // after 13 sec
</script>
<?php
$courseName = $_SESSION['courseName'];
$mailto  = "training@micomputsolutions.co.uk";
$subject = "ASSESSMENT FORM: " . strip_tags($courseName);
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
$message .= "<tr><td><strong>Have you got access to two learners undergoing a vocational course?</strong> </td><td>" . strip_tags($access2learners) . "</td></tr>";
$message .= "<tr><td><strong>Have you got any assessing experience?</strong> </td><td>" . strip_tags($assessxp) . "</td></tr>";
$message .= "<tr><td><strong>Do you know what is Guided Learning Hours?</strong> </td><td>" . strip_tags($glh) . "</td></tr>";
$message .= "<tr><td><strong>Do you know the difference between the NCF and QCF framework?</strong> </td><td>" . strip_tags($claim) . "</td></tr>";
$message .= "<tr><td><strong>Do you know what is cross referencing?</strong> </td><td>" . strip_tags($crossref) . "</td></tr>";
$message .= "<tr><td><strong>Do you know what is a standardisation meeting?</strong> </td><td>" . strip_tags($stand) . "</td></tr>";
$message .= "<tr><td><strong>Can you name legislation and code of practice that affects the assessing role?</strong> </td><td>" . strip_tags($code) . "</td></tr>";
$message .= "<tr><td><strong>Have you ever worked with an action plan framework?</strong> </td><td>" . strip_tags($actionplan) . "</td></tr>";
$message .= "<tr><td><strong>Do you have knowledge of the different assessment methods?</strong> </td><td>" . strip_tags($method) . "</td></tr>";
$message .= "<tr><td><strong>Do you know the roles of both the internal and external verifier</strong> </td><td>" . strip_tags($verifier) ."</td></tr>";
$message .= "<tr><td><strong>Cover Letter:</strong> </td><td>" . strip_tags($cover_letter) ."</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

//*** Uniq id Session ***//
$strSid = md5(uniqid(time()));


$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "Bcc: micomputsolutions@gmail.com" . "\r\n";

$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
$headers .= "This is a multi-part message in MIME format.\n";

$headers .= "--".$strSid."\n";
$headers .= 'Content-Type: text/html; charset=iso-8859-1'.$eol;
$headers .= "Content-Transfer-Encoding: 7bit\n\n";
$headers .= $message."\n\n";

//*** Attachment ***//
for($i=0;$i<count($_FILES["fileAttach"]["name"]);$i++)
{
if($_FILES["fileAttach"]["name"][$i] != "")
{
$strFilesName = $_FILES["fileAttach"]["name"][$i];
$strContent = chunk_split(base64_encode(file_get_contents($_FILES["fileAttach"]["tmp_name"][$i])));
$headers.= "--".$strSid."\n";
$headers .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n";
$headers .= "Content-Transfer-Encoding: base64\n";
$headers .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";
$headers .= $strContent."\n\n";
}
}

if (@mail($mailto, $subject, null, $headers)) 
{
        echo '<a name="top">';
        echo '<link rel="stylesheet" href="../assessment/style.css" type="text/css" charset="utf-8" />';
        echo '<div class="bluset" style="margin: 10px; align: center; width: auto; font-size: 4em; top: 30%;">Your details are being processed, We will be in touch shortly!!</div><br/>';	
        echo '<p id="hide" style="margin: 10px; align: center; width: auto;">You will be redirected in 10 seconds</p><br/>';
        echo '</a>';
        echo " <script language='javascript'> window.location.href = location.href + '#top';</script>"; // or use booleans here
} else  {
        echo "mail send ... ERROR!";
        }
?>
<?php
	session_unset();
    session_destroy();
?>