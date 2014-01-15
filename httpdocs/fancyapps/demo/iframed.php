<!DOCTYPE html>
<html>
    
    <head>
        <title>pop-up reg</title>
        <script type="text/javascript" src="../lib/jquery-1.7.2.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"
        />
        <script src="../../MI ComputSolutions_files/ajaxform.js"></script>
        <script src="js/runonload.js"></script>
        <script src="js/iframed.js"></script>
        <link href="../../MI ComputSolutions_files/micomput.css" rel="stylesheet" type="text/css" />
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
    </head>
    
    <body>
        <h3>Partnership Pre-Registration</h3>
        <div id="contact_form" class="part" style="width: 99%; height: auto;" style="margin-left: 15px;">
            <form style="margin-left: 5px; vertical-align: middle;" name="contact" method="post" action="">
                <p>
                    <label for="name" id="name_label">Contact Person
                        <span class="requiredlabel">(All fields are required)</span>
                        <strong>
                            <div class="error" id="name_error">This field is required</div>
                        </strong>
                    </label>
                    <input type="text" name="name" size="50" id="name" value="" style="width: 60%;"
                    />
                </p>
                <p>
                    <label for="email" id="email_label">Email
                        <strong>
                            <div class="error" id="email_error">Pls. enter valid email</div>
                        </strong>
                    </label>
                    <input type="text" name="email" size="50" id="email" value="" style="width: 60%;"
                    />
                </p>
                <p>
                    <label for="address" id="address_label">Organisation
                        <strong>
                            <div class="error" id="address_error">This field is required</div>
                        </strong>
                    </label>
                    <input type="text" name="address" size="50" id="address" value="" style="width: 60%;"
                    />
                </p>
                <p>
                    <label for="postcode" id="post_label">Position
                        <strong>
                            <div class="error" id="post_error">This field is required</div>
                        </strong>
                    </label>
                    <input type="text" name="postcode" size="50" id="postcode" value="" style="width: 60%;"
                    />
                </p>
                <p>
                    <label for="message" id="message_label">Partnership Interest (Type)
                        <strong>
                            <div class="error" id="message_error">Pls. leave a Message!!</div>
                        </strong>
                    </label>
                    <p></p>
                    <div class="radioInputWrapper">
                        <input type="radio" name="JobTypeFilter" id="JobTypeFilter_0" value="0"
                        checked="checked" class="radioInput">
                    </div>
                    <div class="radioLabelWrapper">
                        <label class="radioLabel" for="JobTypeFilter_0">Formal</label>
                    </div>
                    <div class="radioInputWrapper">
                        <input type="radio" name="JobTypeFilter" id="JobTypeFilter_1" value="1"
                        class="radioInput">
                    </div>
                    <div class="radioLabelWrapper">
                        <label class="radioLabel" for="JobTypeFilter_1">Delivery</label>
                    </div>
                    <div class="radioInputWrapper">
                        <input type="radio" name="JobTypeFilter" id="JobTypeFilter_2" value="2"
                        class="radioInput">
                    </div>
                    <div class="radioLabelWrapper">
                        <label class="radioLabel" for="JobTypeFilter_2">Potential</label>
                    </div>
                    <br />
                </p>
                <br />
                <p>
                    <label for="password" id="password_label1">Choose Password
                        <strong>
                            <div class="error" id="pass0_error">Pls. type password to match</div>
                        </strong>
                    </label>
                    <input type="text" name="pass0" size="50" id="pass0" value="" style="width: 40%;"
                    />
                </p>
                <p>
                    <label for="password" id="password_label2">Retype Password
                        <strong>
                            <div class="error" id="pass1_error">This field is required</div>
                        </strong>
                    </label>
                    <input type="text" name="pass1" size="50" id="pass1" value="" style="width: 40%;"
                    />
                </p>
                <p>
                    <input type="submit" name="submit" class="button blu bigrounded" id="submit_btn"
                    value="Send" />
                </p>
            </form>
        </div>
        </div>
    </body>

</html>