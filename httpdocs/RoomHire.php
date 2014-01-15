<?php session_start(); /** * @author seyemann * @copyright 2011 */ 
$subtitle = "Hire our Workspaces!"; require ('header.php'); $_SESSION[form]='MI ComputSolutions Website Enquiry:.ROOM HIRE';?>
    <div class="centerContainer leftext">
        <div class="sidebarContainer fl">
            <div class="sidebarItem">
                <div class="sidebarHeader">
                    <p style="padding: 14px; margin-left: -17px;">BUSINESS WORKSPACE</p>
                </div>
                <ul class="arrowList">
                    <li class="activeSidebarItem">Overview</li>
                    <li>
                        <a href="#prices" title="">Room Hire Prices</a>
                    </li>
                    <li class="noBottomBorder">
                        <a href="#form" title="">Room Hire Enquiry</a>
                    </li>
                </ul>
            </div>
            <br />
            <div class="top" style="width: 277px; margin-left: 0;">
                <div class="titleSide" style="width: 230px; margin-top: 33px;margin-left: 2px; padding-left: 45px;">FOR BOOKINGS</div>
            </div>
            <div style="width: 277px; margin-top: 15px; -moz-box-shadow:6px 10px 6px 0px #777777;
-webkit-box-shadow:6px 10px 6px 0px #777777;
box-shadow:6px 10px 6px 0px #777777;">
            <fieldset style="border-color: #DDDDDD; border-style: solid; border-width: thin; background: url('<?php echo $landing;?>/MI ComputSolutions_files/bg_part.png')50% 0px repeat-y transparent; ">
                <legend><img src="<?php echo $landing;?>/MI ComputSolutions_files/4.png" alt="Phone" width="40" /></legend>
                <div class="pdfw" style="font-family: Courier new; font-size: 2.2em; "> <strong>020 8694 5721</strong>

                </div>
            </fieldset>
    </div>
            <div class="pot" style="width: 260px;"></div>
            <!-- end sidebarItem -->
        </div>
        <!-- end sidebarContainer -->
        <!-- Page Container -->
        <div class="container_16" style="height: auto;">
            <div class="fl grid_10 " style="width: 65%; height: auto;">
                <p>
                    <a href="service.php">Our Services</a>&raquo; Room Hire</p>
                <h4>
                    <img alt="portfolio_image" src="MI ComputSolutions_files/Briefcase.png"
                    height="67x" align="left" />
                    </a>
                    <span class="foregroundBlue">
                        <em>Business Workspace</em>
                    </span>
                    <span class="foregroundLightBlue"></span>
                </h4>
                <div class="sepContainer">
                    <!-- -->
                </div>
                <em>
                    <h3>MI ComputSolutions has a range of fully equipped rooms that you can adapt
                        for a variety of events, from meetings and workshops to training and conferences.</h3>
                </em>
                <br />
                <p>Click on the thumbnails below to see a larger view of our training / conference
                    rooms.</p>
                <a name="prices"></a>
                <?php require ( 'picpop.php'); ?>
                    <br />
                    <br />
                    <p></p>
                    <br />
                    <p>
                        <font color="#222222">
                            <em>All rooms are newly re-furbished. We are located in South West London,
                                within 250 meters of Brixton Stations.&nbsp;</em>
                        </font>
                    </p>
                    <p></p>
                    <font size="3">
                        <font color="#000000">
                            <strong>
                                <em>
                                    <span style="font-family: Arial">
                                        <span></span>
                                    </span>
                                    <span style="font-family: 'Arial Narrow'">
                                        <p>&nbsp;</p>
                                    </span>
                                </em>
                            </strong>
                        </font>
                    </font>
                    <div id="period_one" class="room_hire" style="width: 520px;">
                        <h4 class="table_header titleSide">
                            <em>Room Hire Charges</em>
                        </h4>
                        <?php require ( 'tabHire.php'); ?>
                            <br />
                            <p>
                                <em>
                                    <strong>Additional Information</strong>:</em>
                            </p>
                            <ul style="line-height: 150%">
                                <li class="tablist">Free wi-fi available.</li>
                                <li class="tablist">FREE Tea / Coffee / Water</li>
                                <li class="tablist">FREE White Board &amp; Pens</li>
                                <li class="tablist">Catering is available on request</li>
                                <li class="tablist">Percentage discount available for Charities and Voluntary organisations.</li>
                                <li
                                class="tablist">Projector and Powerboards available based on need.</li>
                                    <li class="tablist">Hourly hire rates (Contact Us for availability).</li>
                                    <li class="tablist">Full day hires are an equivalent of a normal working day hours of 9am
                                        - 5pm (8 hours).</li>
                                    <li class="tablist">Additional charges apply for out-of-office hours hire - please contact
                                        us for more information</li>
                            </ul>
                            <br />
                            <a name="form"></a>
                            <h4 class="titleSide">
                                <em>Room Hire enquiry form</em>
                            </h4>
                            <p></p>
                            <div id="contact_form" style="margin-left: 15px;">
                                <form name="contact" method="post" action="">
                                    <p>
                                        <label for="name" id="name_label">Name
                                            <span class="requiredlabel">(All fields are required)</span>
                                            <strong>
                                                <div class="error" id="name_error">This field is required</div>
                                            </strong>
                                        </label>
                                        <input type="text" name="name" id="name" value="" style="width: 60%;"
                                        />
                                    </p>
                                    <p>
                                        <label for="email" id="email_label">Email
                                            <strong>
                                                <div class="error" id="email_error">Pls. enter valid email</div>
                                            </strong>
                                        </label>
                                        <input type="text" name="email" id="email" value="" style="width: 47%;"
                                        />
                                    </p>
                                    <p>
                                        <label for="phone" id="phone_label">Phone
                                            <strong>
                                                <div class="error" id="phone_error">This field is required</div>
                                            </strong>
                                        </label>
                                        <input type="text" name="phone" id="phone" value="" style="width: 47%;"
                                        />
                                    </p>
                                    <p>
                                        <label for="address" id="address_label">Organisation
                                            <strong>
                                                <div class="error" id="address_error">This field is required</div>
                                            </strong>
                                        </label>
                                        <input type="text" name="address" id="address" value="" style="width: 60%;"
                                        />
                                    </p>
                                    <p>
                                        <label for="postcode" id="postcode_label">Position
                                            <strong>
                                                <div class="error" id="postcode_error">This field is required</div>
                                            </strong>
                                        </label>
                                        <input type="text" name="postcode" id="postcode" value="" style="width: 60%;"
                                        />
                                    </p>
                                    <p>
                                        <label for="message" id="message_label">Message
                                            <strong>
                                                <div class="error" id="message_error">Pls. leave a Message!!</div>
                                            </strong>
                                        </label>
                                        <textarea name="message" id="message" rows="4" cols="20" style="width: 60%;"></textarea>
                                    </p>
                                    <p>
                                        <input type="submit" name="submit" class="button blu bigrounded" id="submit_btn"
                                        value="Send" />
                                    </p>
                                </form>
                            </div>
                            <p>&nbsp;</p>
                            <a href="javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>
                    </div>
            </div>
            <!-- end pageContent -->
            <div class="downwrap2"></div>
        </div>
    </div>
    <?php require ( 'footer.php');?>