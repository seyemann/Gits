<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <link href="../MI ComputSolutions_files/micomput.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
        <style type="text/css">
            <!-- body {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                vertical-align: baseline;
                background: none;
            }
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }
            .radioLabelWrapper {
                background-color: #F2F2F3;
                border: 1px solid #B0B0B0;
                float: left;
                height: auto;
                margin: 0px 10px 0px 0px;
                height: 28px;
                width: auto;
                display: inline;
                color: #58585A;
                padding: 0px 5px 0 3px;
            }
            .radioInputWrapper, .checkboxInputWrapper {
                float: left;
                width: 31px;
                height: 28px;
                border: 1px solid #B0B0B0;
                border-width: 1px 0 1px 1px;
                -->
        </style>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
</head>
<body>

<!-- Form Code Start -->
<div id='fg_membersite' class='part' style='width: auto; font-size: large;'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<h3 style='color:#9F92C7;'>Partnership Pre-Registration</h3>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Company Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' style=' display: block;' class='error'></span>
</div>
<div class='container'>
    <label for='name' >Contact Person*: </label><br/>
    <input type='text' name='staffname' id='staffname' value='<?php echo $fgmembersite->SafeDisplay('staffname') ?>' maxlength="50" /><br/>
    <span id='register_staffname_errorloc' style=' display: block;' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc'  style=' display: block;' class='error'></span>
</div>
<div class='container'>
    <label for='username' >Choose username*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' style=' display: block;' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' style=' display: block;' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("staffname","req","Please provide a contact person");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<!--
Form Code End (see html-form-guide.com for more info.)
-->
</div>
</body>
</html>