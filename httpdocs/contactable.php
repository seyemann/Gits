<?php 
session_start();
$subtitle = "Contact Us";
require ('header.php');
$_SESSION[form] = 'MI ComputSolutions Website Enquiry:.CONTACT Page';
?>
<div class="body" style="padding: 0 0 0 0;">
<div class="container_12">
              
<div class="grid_3 extra-right-padding"> <img src="MI ComputSolutions_files/Users.png" alt="People_Image" height="38px" align="left" />
  <h1 class="green">Get in Touch...</h1>
  <p>Please use the contact form on the right side if you have any questions or requests, concerning our services.</p>
  <p>We will respond to your message within 24 hours.</p>
  <p>Below you can find a quick roadmap to get to our office.</p>
  <p>Alternatively, you can stay in touch with our activities by clicking the social media link to the left. </p>
</div>

<div class="grid_4 extra-left-paddings"><img src="MI ComputSolutions_files/Address Book.png" alt="Contacts_Image" height="38px" align="left" />
  <h1 style="margin-top: 3px;" class="blue">Our Location</h1>
  <span><b>Main Office</b></span> <div style="padding-right: 5px;"> <img src="MI ComputSolutions_files/TheQueen.jpg" height="98" align="right" /></div>
  <p><font face="monospace" size="2.4em" color="#3C367A"><strong>MI Skills Development Centre</strong></font><br/>
  The Queen<br/>
  <span class="design">47a Bellefields Road, Brixton.</span><br/>
  <span class="design">London. SW9 9UH</span></p>
  <p class="contactinfo">
	    <span>Tel:</span> +44 (0) 20 75 01 64 50<br />
        <span style="visibility: hidden;">Tel:</span> +44 (0) 20 84 69 00 57<br />
	    <span>Email:</span>  <a title="Mail us for more information" href="mailto:info@micomputsolutions.co.uk<">info@micomputsolutions.co.uk</a></p><br />
  <span><b>Deptford Office</b></span><div style="padding-right: 5px;"><img src="MI ComputSolutions_files/Wilshaw.jpg" width="67" height="100" align="right" /></div>
  <p><font face="monospace" size="2.4em" color="#3C367A"><strong>MI Skills Development Centre</strong></font><br/>
  <span class="design">19 Wilshaw Street</span><br/>
  <span class="design">London. SE14 6TN</span></p>
  <p class="contactinfo">
	    <span>Tel:</span> +44 (0) 20 86 94 57 21<br />
        </p>
  <br />
</div>

<div class="grid_3 extra-left-padding"> <img src="MI ComputSolutions_files/Book Open.png" alt="Book_Image" height="35px" align="left" />
  <h1 class="orange">Your Enquiry</h1>
<div id="contact_form">
      <form name="contact" method="post" action="">                <p>
          <label for="name" id="name_label">Name <span class="requiredlabel">(All fields are required)</span><strong><div class="error" id="name_error">This field is required</div>
</strong></label>
          <input type="text" name="name" id="name" value="" />        </p>
        <p>
          <label for="email" id="email_label">Email <strong><div class="error" id="email_error">Pls. enter valid email</div>
</strong></label>
          <input type="text" name="email" id="email" value="" />        </p>
        <p>
          <label for="phone" id="phone_label">Phone<strong><div class="error" id="phone_error">This field is required</div>
</strong></label>
          <input type="text" name="phone" id="phone" value="" />        </p>
<p>
          <label for="address" id="address_label">Address<strong><div class="error" id="address_error">This field is required</div>
</strong></label>
          <input type="text" name="address" id="address" value="" />        </p>
        <p>
          <label for="postcode" id="postcode_label">Post Code<strong><div class="error" id="postcode_error">This field is required</div>
</strong></label>
          <input type="text" name="postcode" id="postcode" value="" />        </p>  
        <p>
          <label for="message" id="message_label">Message <strong><div class="error" id="message_error">Pls. leave a Message!!</div>
</strong></label>
          <textarea name="message" id="message" rows="4" cols="20"></textarea>        </p>
        <p style="background-color: rgba(255, 202, 111, 0.5); width: 88%; color: #1C2443;">
          <label for="checkbox" id="checkbox_label">Sign-Up for NewsLetter</label>
          <input type="checkbox" id="subbox" name="subbox" value="subscribed" checked="checked"/>    </p>
  <p><input type="submit" name="submit" class="button blu bigrounded" id="submit_btn" value="Send" /></p>
  
    </form>
  </div>
</div>
</div> <br/>
<div class="container_16">
  <div class="top_container"><img src="MI ComputSolutions_files/Compass.png" alt="Roadmap_Image" height="42px" align="left" /><h1 class="blue" >&nbsp;&nbsp;Road Map</h1></div> 
  <div class="map"><iframe width="920" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=47+Bellefields+Road,+United+Kingdom&amp;aq=0&amp;sll=62.915233,-99.84375&amp;sspn=23.078647,86.572266&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=47+Bellefields+Rd,+London+SW9,+United+Kingdom&amp;ll=51.464239,-0.116965&amp;spn=0.00758,0.021136&amp;t=m&amp;z=16&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=47+Bellefields+Road,+United+Kingdom&amp;aq=0&amp;sll=62.915233,-99.84375&amp;sspn=23.078647,86.572266&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=47+Bellefields+Rd,+London+SW9,+United+Kingdom&amp;ll=51.464239,-0.116965&amp;spn=0.00758,0.021136&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left"></a></small></div>
</div></div>
<?php require ('footer.php');?>
