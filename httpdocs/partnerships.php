<?php
session_start();
$subtitle = "Partner With Us!";
require ('header.php');
$_SESSION[form]='MI ComputSolutions Website Enquiry:.PARTNERSHIPS';
/**
 * @author seyemann
 * @copyright 2011
 */
 
?>
<div class="body" style="padding: 0 0 0 0;">
<div class="centerContainer leftext">
		<div class="sidebarContainer fl">
			<div class="sidebarItem">
				<div class="sidebarHeader">
					<p style="padding: 14px; margin-left: -17px;">WHAT WE OFFER</p>
				</div>
				<ul class="arrowList">
					<li class="activeSidebarItem">Overview</li>
					<li class="noBottomBorder"><a href="#form" title="">Enquiry form</a></li>
				</ul>
			</div> 
           <div class="top" style="width: 277px; margin-left: 0;">
                <div class="titleSide" style="width: 230px; margin-top: 33px;margin-left: 2px; padding-left: 45px;">REGISTER NOW!</div>
            </div>
            <?php /**
 * require ('partnerpop.php');
 */?>
            <div class="pot" style="width: 260px;"></div>
            <div class="part" style="font-size: 1.2em; margin-top: -20px;"><?php require ('Registration/login.php') ?> </div>           
            <!-- end sidebarItem -->
        </div> <!-- end sidebarContainer -->
		
		<!-- Page Container -->
		<div class="container_16" style="height: auto;">
        <div class="fl grid_10 " style="width: 65%; height: auto;"><p><a href="partners.php">Our Affliates</a> &raquo; Partnerships</p>
        <h4><img alt="portfolio_image" src="MI ComputSolutions_files/Briefcase.png" height="67x" align="left"/></a><span class="foregroundBlue"><em>Partnerships</em></span><span class="foregroundLightBlue"></span></h4>
			<div class="sepContainer"><!-- --></div>
            
            <em><h3>MI ComputSolutions (trading as MI Skills Development Centre) is a third sector training provider.  </h3></em>
<p>
We aspire to improve the accessibility of our clientele to quality services within our area of expertise, in liaison with other like minded organisations.
Based on this premise we recognise the benefit of partnership with third sector education providers, colleges, as well as local communities and authorities. 
</p>
<p>
MI ComputSolutions is in a unique position having links with compatible organisations and a strong reach into&nbsp;London's diverse communities. 
</p>
<p>
To discuss a potential partnership opportunity, please contact us using the form below.&nbsp; 
</p>
<p>
&nbsp;
</p>
<blockquote>
	<p>
	<font color="#222222"></font>
	</p>
</blockquote>
<p>
<font color="#222222"><strong><em>Here's what some of our clients have to say about our services....</em></strong>&nbsp;</font> 
</p>
<blockquote>
	<p>
	<font color="#222222">"We are very happy with our progress, as we were supported in developing a brand for our organisation and explore the possibilities."</font> 
	</p>
</blockquote>
<font size="3"><font color="#000000"><strong><em><span style="font-family: Arial"><span></span></span><span style="font-family: 'Arial Narrow'">
<p>
&nbsp;
</p>
</span></em></strong></font></font><a name="form"></a>
<h4 class="titleSide"> <em>enquiry form</em> </h4> <p></p>
<div id="contact_form" style="margin-left: 15px;">
      <form name="contact" method="post" action="">                <p>
          <label for="name" id="name_label">Name <span class="requiredlabel">(All fields are required)</span><strong><div class="error" id="name_error">This field is required</div>
</strong></label>
          <input type="text" name="name" id="name" value="" style="width: 60%;"/>        </p>
        <p>
          <label for="email" id="email_label">Email <strong><div class="error" id="email_error">Pls. enter valid email</div>
</strong></label>
          <input type="text" name="email" id="email" value="" style="width: 50%;" />        </p>
        <p>
          <label for="phone" id="phone_label">Phone<strong><div class="error" id="phone_error">This field is required</div>
</strong></label>
          <input type="text" name="phone" id="phone" value=""  style="width: 40%;"/>        </p>
<p>
          <label for="address" id="address_label">Organisation<strong><div class="error" id="address_error">This field is required</div>
</strong></label>
          <input type="text" name="address" id="address" value=""  style="width: 50%;"/>        </p>
        <p>
          <label for="postcode" id="postcode_label">Position<strong><div class="error" id="postcode_error">This field is required</div>
</strong></label>
          <input type="text" name="postcode" id="postcode" value=""  style="width: 50%;"/>        </p>  
        <p>
          <label for="message" id="message_label">Message <strong><div class="error" id="message_error">Pls. leave a Message!!</div>
</strong></label>
          <textarea name="message" id="message" rows="4" cols="20" style="width: 50%;"></textarea>        </p>
  <p><input type="submit" name="submit" class="button blu bigrounded" id="submit_btn" value="Send" /></p>
  
    </form>
  </div><p>&nbsp;</p>

<a href = "javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>                                
		</div></div> <!-- end pageContent -->
	<div class="downwrap2"></div></div></div>
 <?php require ('footer.php');?>