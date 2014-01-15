<?php 
session_start();
if (!isset($_SESSION['load'])) {
$_SESSION['load'] = 'name';
}
?>
<!DOCTYPE>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<script>

function load()
{
document.login.<?php echo $_SESSION['load']; ?>.focus();
}

function validateCheck()
{
    if(document.getElementById('resident').checked){
    document.getElementById('resident_det').disabled=true;
    }
    else { document.getElementById('resident_det').focus(); 
        document.getElementById('resident_det').defaultValue= 'Please Enter Details';
        document.getElementById('resident_det').disabled=false;
}
}
var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
function emailcheck(){
var string1=document.getElementById('email').value
var returnval=emailfilter.test(string1)
if (returnval==false){
alert("Please enter a valid email address.");
document.getElementById('email').focus()
return false;
}
}

function checknumber(){
var num =document.login.phone.value
var anum=/0\d{10}/
if (anum.test(num))
testresult=true
else{
alert("Please enter a valid UK phone number!");
document.login.phone.focus()
testresult=false
}
return (testresult)
}

function ddmmyy() {
  var dob = document.login.dob.value  
  var reg = /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/;
  if (reg.test(dob))
  testresult=true
  else {
    alert("Please enter in the format dd/mm/yyyy")
    document.login.dob.focus()
    return false;
}
}
</script>
<title></title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="inline_e.css" media="screen">
    <link rel="stylesheet" href="jQuery%20UI%20Datepicker_files/jquery00.css">
	<script src="jQuery%20UI%20Datepicker_files/jquery-1.js"></script>
	<script src="jQuery%20UI%20Datepicker_files/jquery00.js"></script>
	<script src="jQuery%20UI%20Datepicker_files/jquery01.js"></script>
	<script src="jQuery%20UI%20Datepicker_files/jquery02.js"></script>

	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	</script>
    <script src="<?php echo $landing;?>/MI ComputSolutions_files/sisyphus.js"></script>
    <script type="text/javascript">
    $(function () {
        $( "form" ).sisyphus();
    });
    </script>
</head>

<body onload="load()">
<div id="wrap">
<div id="content">	
	<h2 id="pageTitle">Registration and Eligibility Form</h2>	
    <div id="content-page">
	<p class="message"></p>
    <a name="top" id="top"></a>
	  <h2><a> Pre-enrolment for training course / programme &gt;&gt; <?php echo $_SESSION['courseName']; ?></a></h2>
		<form class="global-form" name="login" name="login" action="process.php" method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
			<fieldset>
			  <legend>Personal Details</legend>
				<table>
				  <tr>
					<td class="first"><label for="name">Name</label></td>
					<td><input type="text" name="name" id="name" class="formField" onfocus="if(this.value=='name')this.value='';" onblur="if(this.value=='')this.value='name';" value="name" maxlength="70"></td>
                    <td class="first"><label for="surname">Surname</label></td>
					<td><input type="text" name="surname" id="surname" class="formField" onfocus="if(this.value=='surname')this.value='';" onblur="if(this.value=='')this.value='surname';" value="surname" maxlength="50"></td>
                    </tr>
				  <tr>
                    <td class="first"><label for="address">Address</label></td>
					<td><input type="text" name="address" id="address" class="formField" onfocus="if(this.value=='address')this.value='';" onblur="if(this.value=='')this.value='address';" value="address" maxlength="70"></td>
					<td class="first"><label for="address" style="visibility: hidden;">Address</label></td>
					<td><input type="text" name="address1" id="address1" class="formField" onfocus="if(this.value=='address')this.value='';" onblur="if(this.value=='')this.value='address';" value="address" maxlength="70"></td>
		          </tr>
				  <tr>
					<td class="first"><label for="postcode">Post Code</label></td>
					<td><input type="text" name="postcode" id="postcode" class="formField" onfocus="if(this.value=='post code')this.value='';" onblur="if(this.value=='')this.value='post code';" value="post code" maxlength="10"></td>
                    <td class="first"><label for="email">Email</label></td>
					<td><input type="text" name="email" id="email" class="formField" onfocus="if(this.value=='email')this.value='';" onchange="emailcheck()" onblur="if(this.value=='')this.value='email';" value="email" maxlength="50"></td>
                  </tr>
                  <tr>
                    <td class="first"><label for="phone">Phone number</label></td>
					<td><input type="text" name="phone" id="phone" class="formField" onfocus="if(this.value=='phone')this.value='';" onblur="checknumber()" value="phone" maxlength="13"></td>	
                    <td class="first"><label for="dob">Date of Birth</label></td>
					<td><input type="text" name="dob" id="datepicker" class="formField" onfocus="if(this.value=='date of birth')this.value='';" onblur="if(this.value=='')this.value='date of birth';" onchange="ddmmyy();" value="date of birth" maxlength="13"></td>
				  </tr>
                </table>
			</fieldset>
            <fieldset>
			  <legend>Residential Status</legend>
				<table>
                <strong><span>Please uncheck the first box if this does not apply to you. complete the 2nd part</span></strong>
				  <tr><br />
					<td><div style="width:77%;"><p>UK resident or National of European Union (EU) country who has been
                        resident in European Economic Area (EEA) for last 3 years or more
                        (or spouse, civil partner or child of above)</p></div></td>	
                     <td><input type="checkbox" name="resident" id="resident" onclick="validateCheck();" value="UK resident or National of European Union (EU) country who has been
                        resident in European Economic Area (EEA) for last 3 years or more
                        (or spouse, civil partner or child of above)" checked=""></td>
                     </tr>
                  <tr><br />
					<td><div style="width:77%;"><p>Other &ndash; please provide details (state country where you usually live.)</p></div></td>	
                     <td><textarea name="resident_det" id="resident_det" class="formField" onfocus="if(this.value=='Please Enter Details')this.value='';"></textarea></td>	  
                  </tr>
			  </table>
			</fieldset>
            <fieldset>
			  <legend>Qualifications</legend>
				<table>
                <span><strong>Please select the highest level you have attained.</strong></span>
				  <tr><br />
					<td class="first"><label for="Entry Level">Entry Level</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="entry level"></td>
                    <td class="first"><label for="Level 1">Level 1</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="level 1"></td>				  
                  </tr>
				  <tr>
					<td class="first"><label for="Level 2">Level 2</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="level 2"></td>
                    <td class="first"><label for="Level 3">Level 3</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="level 3"></td>
		          </tr>
				  <tr>
					<td class="first"><label for="Level 4">Level 4</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="level4"></td>
				    <td class="first"><label for="Level 5">Level 5 &amp; above</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="level5"></td>	
                  </tr>
                  <tr>
					<td class="first"><label for="OQ">Other Qualification</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="Other Qualification"></td>
				    <td class="first"><label for="NK">Not Known</label></td>
					<td><input type="radio" name="qual" id="qual" class="formField" value="Not Known"></td>	
                  </tr>
                </table>
			</fieldset>
            <fieldset>
			  <legend>Employment Status</legend>
				<table>
                <span><strong>Select the appropriate box to indicate your employment status<br />
                Please advise if this status changes before you start the course</strong> </span>
				  <tr><br />
					<td class="first"><label for="paid">In paid employment</label></td>
					<td><input type="radio" name="status" id="status" class="formField" value="In paid employment"></td>
                    <td class="first"><label for="unpaid1">Not in paid employment</label></td>
					<td><input type="radio" name="status" id="status" class="formField" value="not in paid employment"></td>				  
                  </tr>
				  <tr>
					<td class="first"><label for="Level 2">Not in paid employment &amp; not looking for work</label></td>
					<td><input type="radio" name="status" id="status" class="formField" value="not in paid employment nor looking"></td>
		          </tr>
                </table>
			</fieldset>
            <fieldset>
			  <legend>Concessionary &amp; Reduced Fees</legend>
				<span><strong>Please select the most appropriate box that matches your present circumstance</strong> </span><br />
				  <div>
              		<div class="claim">
                        <div class="bluset"><span>In receipt of Jobseekers Allowance (JSA)(includes partners where claim is joint)</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="on jsa">
                        </div>
                    </div>
                    <div class="claim">
                        <div class="bluset"><span><strong>Learner aged 19-24</strong> on first Full Level 2 Qualification(born between 01/09/1988 and 31/08/1994)</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="aged 19-24 on Level2">
                        </div>
                    </div>					  
                  </div>
					<div class="claim">
                        <div class="bluset"><span>In receipt of Employment Support Allowance(ESA) in the Work Related Activity Group</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="on esa/wrag">
                        </div>
                    </div>
                    <div class="claim">
                        <div class="bluset"><span><strong>Learner aged 19-24</strong> on first Full Level 3 Qualification(born between 01/09/1988 and 31/08/1994)</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="aged 19-24 on Level3">
                        </div>
                    </div>
					<div class="claim">
                        <div class="bluset"><span>Learner on Skills for Life Literacy and Numeracy based programme</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="on esol_skills4Life">
                        </div>
                    </div>
                    <div class="claim">
                        <div class="bluset"><span>Learner on wider benefits where skills and training will help you into work (signed declaration required)</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="on redundancy_benefit">
                        </div>
                    </div>	
					<div class="claim">
                        <div class="bluset"><span><strong>Aged 16-18</strong> (Accredited Courses only)(born between 01/09/1994 and 31/08/1997)</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="Aged 16-18">
                        </div>
                    </div>
                    <div class="claim">
                        <div class="bluset"><span>At state pensionable age prior to the start of a course</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="pensionable_age">
                        </div>
                    </div>		
					<div class="claim">
                        <div class="bluset"><span><span><strong>Learner aged 25+</strong> on first Full Level 2 or 3 Qualification (OR without any prior qualification)</span></div>
                        <div class="radioset">
                            <input type="radio" name="claim" id="claim" class="formField" value="Aged 25+">
                        </div>
                    </div>
			</fieldset>
            <td><input class="formButton" name="send" type="submit" value="SUBMIT"></td>
		</form>
	 </div>
</div><!--//content-->	
<div class="clear"></div><!--//clear-->

<div id="footer">
</div><!--//footer-->

</div><!--//wrap-->

</body>
</html> 
