<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link type="text/css" rel="stylesheet" href="../resources/css/validform.custom.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="../resources/libraries/htmlform_js_libs.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="../resources/libraries/ajaxfileupload.js"></script>
        <style>
            body {width:auto; margin:0px; font-family:'Open Sans';}
            form.validform fieldset.main_fieldset {background-color:#FFFFFF}
            form.validform label {color:#000000}
            h1 {color:#000000}
            form.validform .vf__description {color:#000000}
            form.validform .vf__notice {color:#000000}
            form.validform .vf__tip {color:#000000}
            input.vf__button {color:#000000}
            #element_518104c63a5a6 {width:180px;}
            .fieldlabel_block {width:152px;}
            #element_5188fd82e9a9c {height:80px;}
            #element_5181050e6794c {width:180px;}
            #element_51810719311ca {width:180px;}
            #element_518107f9c92b4 {width:180px;}
            #element_5181059a903c5 {width:120px;}
            #element_518109e32c206 {width:150px;}
            #element_51810989a8cdf {width:120px;}
            form.validform .container_recaptcha {left:0px;}
            #captchaStatus {color:red;}
        </style>
    </head>
    <body>
        <script type="text/javascript">
            // <![CDATA[
            if(parent.document.getElementById('htmlformcomloader_ida00bcf')) {
                if(parent.document.getElementById('loadinghtmlformcom_ida00bcf')){
                    parent.document.getElementById('htmlformcomloader_ida00bcf').removeChild(parent.document.getElementById('loadinghtmlformcom_ida00bcf'));
                }
                if(parent.document.getElementById('rotatorhtmlformcom_ida00bcf')) {  
                    parent.document.getElementById('htmlformcomloader_ida00bcf').removeChild(parent.document.getElementById('rotatorhtmlformcom_ida00bcf'));
                }
            }
            function validateCaptcha()
            {
                challengeField = $("input#recaptcha_challenge_field").val();
                responseField = $("input#recaptcha_response_field").val();
                var html = $.ajax({
                    type: "POST",
                    url: "ajax.recaptcha.php",
                    data: "recaptcha_challenge_field=" + challengeField + "&recaptcha_response_field=" + responseField,
                    async: false
                }).responseText;
                if (html.replace(/^\s+|\s+$/, '') == "success")
                {
                    $("#captchaStatus").html(" ");
                    resizeParentIframe();
                    return true;
                }
                else
                {
                    $("#captchaStatus").html("Your captcha is incorrect. Please try again");
                    Recaptcha.reload();
                    resizeParentIframe();
                    return false;
                }
            }
            var RecaptchaOptions = {
                theme : 'clean',"width":400
            };
            function ajaxFileUpload(id)
            {
                //starting setting some animation when the ajax starts and completes
                $('#'+id+'_upload').attr('data-rel','loading_file');
                $('input[type=submit]').attr('disabled','true');
                $('input[type=submit]').css('color','#999999');
                $('#validating_space').addClass('uploading_file');
                $.ajaxFileUpload(
                {
                    url:'doajaxfileupload.php?id='+id,
                    secureuri:false,
                    fileElementId:id,
                    dataType: 'json',
                    success: function (data, status)
                    {
                        if(typeof(data.error) != 'undefined')
                        {
                            if(data.error != '')
                            {
                                $('#'+id+'_upload').html('<img style="vertical-align:middle" src="../resources/images/icons/error.png" alt="error"/>  '+data.error);
                                resizeParentIframe();
                                $('#'+id+'_upload').attr('data-rel','');
                                $('#'+id+'_upload').attr('data-stupload','');
                                $('#validating_space').removeClass('uploading_file');
                                $('input[type=submit]').attr('disabled','');
                                $('input[type=submit]').css('color','#000000');
                                $('.toupload').each(function() {
                                    if ($(this).attr('data-rel') && $(this).attr('data-rel')!='no_upload') {
                                        $('#validating_space').addClass('uploading_file');
                                        $('input[type=submit]').attr('disabled','true');
                                        $('input[type=submit]').css('color','#999999');
                                    }
                                });
                                return false;
                            }else
                            {
                                $('#'+id+'_upload').html('<img style="vertical-align:middle" src="../resources/images/icons/accept.png" alt="accept"/>  '+data.msg); 
                                resizeParentIframe();
                                oFormObject = document.forms[0];
                                oFormObject.elements[id+'_name'].value = data.msg; 
                                $('#'+id+'_upload').attr('data-rel','');
                                $('#'+id+'_upload').attr('data-stupload','uploaded');
                                $('#validating_space').removeClass('uploading_file');
                                $('input[type=submit]').attr('disabled','');
                                $('input[type=submit]').css('color','#000000');
                                $('.toupload').each(function() {
                                    if ($(this).attr('data-rel') && $(this).attr('data-rel')!='no_upload') {
                                        $('#validating_space').addClass('uploading_file');
                                        $('input[type=submit]').attr('disabled','true');
                                        $('input[type=submit]').css('color','#999999');
                                    }
                                });
                                return true;
                            }
                        }
                    },
                    error: function (data, status, e)
                    {
                        alert(e);
                    }
                }
                )
                return false;
            }  
            function upload_event(id)
            {
                $('#'+id).each(function() {
                    if($(this).val()) {
                        ajaxFileUpload($(this).attr('id'));
                        $(this).next().attr('data-sel','file_specified');
                        } else {
                        $(this).next().attr('data-sel','');
                        $(this).next().attr('data-rel','');
                    }    
                });
            }    
            $(document).ready(function() {
                if(parent.document.getElementById('htmlformcom_wp_loader_ida00bcf')){
                    $("#poweredhtmlformcom").remove();
                }
                $("#htmlform").width(630);
                $("#htmlform").css('overflow','hidden');
                //var w = parseInt($("#htmlform").css('width'));
                var w = 630;
                var navlb_space = 2*(5 + parseInt($('#htmlform').find('.main_fieldset:first').css('padding-right')));
                $('.field_block').each(function(){
                    var label = $(this).children(':first-child').find('.fieldlabel_block:first').find('label:first');
                    var w_label = parseInt(label.css('width')) + parseInt(label.css('padding-left')) + parseInt(label.css('padding-right')) + parseInt(label.css('margin-right'));
                    $(this).children(':first-child').find('.fielddesc_block:first').width(w-w_label-navlb_space-2 );
                    $(this).width(w-navlb_space+2);
                    $(this).css('overflow','hidden');
                }
                );
                $('.embd_object').each(function(){
                    var w_margin = parseInt($(this).css('margin-left'));
                    $(this).width(w-navlb_space-w_margin-2);
                    //alert(w-navlb_space-w_margin-2);
                    $(this).css('overflow','hidden');
                }
                );
                resizeParentIframe();
                $('#recaptcha_logo').remove();
                $('#recaptcha_tagline').remove();
                $.datepicker.setDefaults($.datepicker.regional['en']);
                $('.datepicker').datepicker({ dateFormat: 'dd MM yy', duration: 'fast', changeMonth:true, changeYear:true, gotoCurrent:true, showOtherMonths:true ,yearRange: '1920:2020' });
                $('.datepicker').disablekeyboard();
                // Notice the use of the each() method to acquire access to each elements attributes
                $('label[data-tooltip]').livequery(function()
                {
                    if ($(this).attr('data-tooltip')) {
                        $(this).qtip({
                            content: $(this).attr('data-tooltip'), // Use the tooltip attribute of the element for the content
                            style: 'light' // Give it a crea mstyle to make it stand out
                        });
                    }
                });
            });
            $(function(){
                var objForm = new ValidForm("htmlform", "One or more errors occurred. Check the marked fields and try again.");
                objForm.addElement('element_518104c63a5a6', 
                'First Name',
                ''
                , 
                true, 
                9000,
                null,
                '',
                'Enter only letters, numbers and punctuation symbols.',
                'Please Enter your Name', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('element_5181050e6794c', 
                'Surname',
                ''
                , 
                true, 
                9000,
                null,
                '',
                'Enter only letters, numbers and punctuation symbols.',
                'Please enter your surname ', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('element_51810719311ca', 
                'Address',
                ''
                , 
                true, 
                9000,
                null,
                '',
                'Enter only letters, numbers and punctuation symbols.',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('element_518107f9c92b4', 
                'Post Code',
                ''
                , 
                false, 
                9,
                null,
                '',
                'Enter only letters, numbers and punctuation symbols.',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of 9 characters or digits are allowed.');
                objForm.addElement('element_5181059a903c5', 
                'Date of Birth',
                ''
                , 
                true, 
                9000,
                null,
                '1 Jan 1980',
                'Enter only letters, numbers and punctuation symbols.',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('element_518109e32c206', 
                'Email',
                /^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i
                , 
                true, 
                9000,
                null,
                '',
                'For emails use the format name@domain.ext',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('element_51810989a8cdf', 
                'Phone Number',
                /^(\(?\+?[0-9]\)?)?[0-9_\- \(\)]*$/i
                , 
                true, 
                9000,
                null,
                '',
                'Enter a valid phone number.',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('element_518106120f309', 
                'Attach your CV',
                ''
                , 
                false, 
                9000,
                null,
                '',
                'Enter only letters, numbers and punctuation symbols.',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('access2learners', 
                'Have you got access to two learners undergoing a vocational course?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('assessxp', 
                'Have you got any assessing experience?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('glh', 
                'Do you know what is Guided Learning Hours (GLH)?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('claim', 
                'Do you know the difference between the NCF and QCF framework?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('crossref', 
                'Do you know what is cross referencing?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('stand', 
                'Do you know what is a standardisation meeting?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('code', 
                'Can you name legislation and code of practice that affects the assessing role?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('actionplan', 
                'Have you ever worked with an action plan framework?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('method', 
                'Do you have knowledge of the different assessment methods?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('verifier', 
                'Do you know the roles of both the internal  and external verifier?',
                '', 
                true, 
                null,
                null,
                '',
                '',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of  characters or digits are allowed.');
                objForm.addElement('cover_letter', 
                'What skills have you got which you think will make you a good assessor? Please write about 300 words! This is also an assessment of your literacy skills! You will need to state here if you want us to facilitate learners for you?',
                '',
                false, 
                400,
                null,
                '',
                'Enter only letters, numbers and punctuation symbols.',
                'This field is required.', 
                'The value is the hint value. Enter your own value.', 
                'Your input is too short. A minimum of  characters or digits are allowed.', 
                'Your input is too long. A maximum of 400 characters or digits are allowed.');
            });
            // ]]></script>
        <div>
        
        <form id="htmlform" style="width: 80%;" method="post" enctype="multipart/form-data" action="process1.php" class="validform" onSubmit="return (validateCaptcha());">
            <fieldset class="main_fieldset">
                <div class="formname">
                    <h1>Training Initial Enquiry Form</h1>
                    <h2 style="color: #6899ff; font-size: 1.4em;"> Pre-enrolment for training course / programme &gt;&gt; <?php echo $_SESSION['courseName']; ?></h2>
                </div>
                <div class="vf__notice">
                    <p>Required fields are printed in bold.</p>
                </div>
                <fieldset>
			  <legend>Personal Details</legend>
                <div class="formbody">
                    <ol>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block">
                                        <label  >
                                            First Name<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="text" name="element_518104c63a5a6" value="" id="element_518104c63a5a6" data-label="First Name" class="vf__text"  />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block">
                                        <label  >
                                            Surname<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="text" name="element_5181050e6794c" value="" id="element_5181050e6794c" data-label="Surname" class="vf__text"  />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block">
                                        <label  >
                                            Address<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="text" name="element_51810719311ca" value="" id="element_51810719311ca" data-label="Address" class="vf__text"  />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__optional">
                                    <div class="fieldlabel_block">
                                        <label data-tooltip="enter your post code here... example se10 9pe" >
                                        Post Code</label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="text" name="element_518107f9c92b4" value="" id="element_518107f9c92b4" data-label="Post Code" class="vf__text"  />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block">
                                        <label data-tooltip="click on the calendar icon and choose date" >
                                            Date of Birth<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="text" name="element_5181059a903c5" value="" id="element_5181059a903c5" data-label="Date of Birth" class="datepicker required"  />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block">
                                        <label data-tooltip="enter your email in the format xxx@xxx.xxx" >
                                            Email<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="text" name="element_518109e32c206" value="" id="element_518109e32c206" data-label="Email" class="vf__text"  />
                                        <img  style="margin-left:5px; margin-right:10px; vertical-align: middle; " src="../resources/images/icons/email_field.png" alt="Email"/>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block">
                                        <label  >
                                            Phone Number<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="text" name="element_51810989a8cdf" value="" id="element_51810989a8cdf" data-label="Phone Number" class="vf__text"  />
                                        <img  style="margin-left:5px; margin-right:10px; vertical-align: middle; " src="../resources/images/icons/phone_field.png" alt="Phone"/>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__optional">
                                    <div class="fieldlabel_block">
                                        <label data-tooltip="Leave blank if no CV attached" >
                                        Attach your CV</label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <input type="file" style="border-bottom-color: white;" name="element_518106120f309" id="element_518106120f309" data-label="Attach your CV" class="vf__text" onchange="upload_event('element_518106120f309');"  />
                                        <span style="height: 20px; vertical-align:middle" data-rel="no_upload" class="toupload vf__tip" id="element_518106120f309_upload">
                                        </span>
                                        <input type="hidden" name="element_518106120f309_name" value="No File" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        </fieldset>
                        
                        <fieldset>
			  <legend>A short interview...</legend>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Have you got access to two learners undergoing a vocational course?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="access2learners" value="Yes"  /> Yes</label>
                                            <label>
                                                <input type="radio" name="access2learners" value=" No"  />  No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Have you got any assessing experience?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="assessxp" value="Yes"/> Yes</label>
                                            <label>
                                                <input type="radio" name="assessxp" value="No"/> No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Do you know what is Guided Learning Hours (GLH)?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="glh" value="Yes"  /> Yes</label>
                                            <label>
                                                <input type="radio" name="glh" value="No"  />  No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Do you know the difference between the NCF and QCF framework?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="claim" value="Yes"/>Yes</label>
                                            <label>
                                                <input type="radio" name="claim" value="No"/>No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Do you know what is cross referencing?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="crossref" value="Yes"  /> Yes</label>
                                            <label>
                                                <input type="radio" name="crossref" value=" No"  />  No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Do you know what is a standardisation meeting?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="stand" value="Yes"  /> Yes</label>
                                            <label>
                                                <input type="radio" name="stand" value=" No"  />  No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Can you name legislation and code of practice that affects the assessing role?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="code" value="Yes"  /> Yes</label>
                                            <label>
                                                <input type="radio" name="code" value=" No"  />  No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Have you ever worked with an action plan framework?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="actionplan" value="Yes"/>Yes</label>
                                            <label>
                                                <input type="radio" name="actionplan" value=" No"/>No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Do you have knowledge of the different assessment methods?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="method" value="Yes"  /> Yes</label>
                                            <label>
                                                <input type="radio" name="method" value=" No"  />  No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__required">
                                    <div class="fieldlabel_block_radio">
                                        <label  >
                                            Do you know the roles of both the internal  and external verifier?<span class="asterisk_required">*</span>
                                        </label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <fieldset class="vf__list">
                                            <label>
                                                <input type="radio" name="verifier" value="Yes"/>Yes</label>
                                            <label>
                                                <input type="radio" name="verifier" value=" No"/>No</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class='field_block'>
                                <div class="vf__optional">
                                    <div class="fieldlabel_block" style="width: 40%;">
                                        <label data-tooltip="Please write about 300 words" >
                                        What skills have you got which you think will make you a good assessor? Please write about 400 words! This is also an assessment of your literacy skills! You will need to state here if you want us to facilitate learners for you?</label>
                                    </div>
                                    <div class="fielddesc_block">
                                        <textarea name="cover_letter" style="width: 90%; position: relative; display: inline; float: left;" cols="90" rows="12" data-label="What skills have you got which you think will make you a good assessor? Please write about 300 words! This is also an assessment of your literacy skills! You will need to state here if you want us to facilitate learners for you?" id="element_5188fd82e9a9c" class="vf__text" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </fieldset>
                        <li>
                            <div class='container_recaptcha'>
                                <div class='recaptcha'>
                                    <div class='vf__recaptcha'>
                                        Recaptcha Validation: <span style="color: red;">Pls type in the displayed text below</span> <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LcmuuASAAAAAAtiHjxufW8yFHBw_xy4-TpfBmjY"></script>
                                    <noscript>
                                        <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LcmuuASAAAAAAtiHjxufW8yFHBw_xy4-TpfBmjY" height="300" width="500" style="border:0px">
                                        </iframe>
                                        <br/>
                                        <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                                        <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
                                    </noscript>
                                    <p id="captchaStatus">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li >
                        <div class="fieldcontrol_block">
                            <div class="vf__navigation">
                                <input type="hidden" name="vf__dispatch" value="htmlform" />
                                <input type="hidden" name="disableresizing" value="0" />
                                <input type="submit" name="submit" value="SUBMIT FORM" class="vf__button"  />
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
    </fieldset>
</form>
<div  class="validating_space" id="validating_space" style="width: 100%;">
</div>
<script type="text/javascript">
    // <![CDATA[
    function resizeParentIframe() {
        var w_fieldset = parseInt($(".main_fieldset").css('width'));
        var w_client = document.body.clientWidth;
        var w_resize = Math.max(w_fieldset,w_client);
        try{
            $("body").css('width',w_resize);
            $("#htmlform").css('width',w_resize);  
            parent.document.getElementById('myiframe_ida00bcf').style.height = (document.body.clientHeight+2)+'px';
            parent.document.getElementById('myiframe_ida00bcf').style.width = (w_resize+2)+'px';
        }
        catch(error) {}
    }
    // ]]></script>
<script type="text/javascript" src="../resources/libraries/jquery.qtip-1.0.min.js"></script>
</div>
</body>
</html>