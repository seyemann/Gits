<?php session_start();
/**
 * @author seyemann
 * @copyright 2011
 */
$subtitle = "@SkillsDevCentre: " . $_GET['view'];
require ('header.php');
?>
<?php

// load the configuration file.

require ('connect/config.php');
$view = $_GET['view'];
$sql = "SELECT courselink.courseName, courselink.projectype, courselink.type2, courselink.type3, funders.funderName,
coursefund.project_objective, coursefund.funding_objective, coursefund.entryreq, coursefund.qualification, coursefund.duration  
FROM `courselink`
LEFT JOIN `coursefund` ON courselink.courseID = coursefund.courseID
LEFT JOIN `funders` ON coursefund.funderID = funders.funderID
WHERE courselink.courseName ='$view'";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
$row = mysql_fetch_assoc($result);
$_SESSION['courseName'] = $row['courseName'];
?>
<div class="container_16 leftext" style="display: block;">
	<div class="grid_10 wrapup" style="height: auto; width: 55%; margin-left: 10px; padding-left: 5px; padding-right: 8px;">
<?php
  echo "<br />";
  echo "<h4 style='margin: 0px; padding: 0px;'>";
  echo "<span class='foregroundLightBluNoShadow'>{$row['courseName']}</span>";
  echo "</h4>";
  echo "<span class = 'divider'></span><br />";
  echo "<div style='height: 24px; width: 31%; float: right; margin-left: 10px;'><!-- AddThis Button BEGIN -->
<div class='addthis_toolbox addthis_default_style'>
<a class='addthis_button_preferred_1'></a>
<a class='addthis_button_preferred_2'></a>
<a class='addthis_button_preferred_3'></a>
<a class='addthis_button_preferred_4'></a>
<a class='addthis_button_compact'></a>
<a class='addthis_counter addthis_bubble_style'></a>
</div>
<script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f33d0df7bfc5249'></script>
<!-- AddThis Button END --><br />";
  echo "</div>";
  echo "<br/>";
  echo "<br/>";
  echo "<span class = 'courses'><strong>Course Overview: </strong> </span><br />";
  echo "<ul>";
  echo "<li> {$row['project_objective']}</li>";
  echo "</ul><br />";
  echo "<span class = 'courses'><strong>Entry Requirements: </strong> </span><br />";
  echo "<ul>";
  echo "<li> {$row['entryreq']}</li>";
  echo "</ul><br />";
  echo "<span class = 'courses'><strong>Qualification/Progression: </strong></span><br/>";
  echo "<ul>";
  echo "<li> {$row['qualification']}</li>";
  echo "</ul><br />";
  echo "<span class = 'courses'><strong>How long does it take? </strong></span><br />";
  echo "<ul>";
  echo "<li> {$row['duration']}</li>";
  echo "</ul><br />";
  /**
 * echo "<span class = 'courses'><strong>Project Type: </strong></span><br/>";
 *   echo "<ul>";
 *   echo "<li> {$row['projectype']}</li>";
 *   echo "<li> {$row['type2']}</li>";
 *   echo "<li> {$row['type3']}</li>";
 *   echo "</ul><br />";
 */
  echo "<span class = 'courses'><strong>How much will it cost? </strong></span><br />";
  echo "<ul>";
  echo "<li> {$row['funding_objective']}</li>";
  echo "</ul>";
 ?> 
<?php
		}
		else{ header('Location: pagenotfound.php');
		mysql_close($link);}
		?>
<br />
<p><form method="post" enctype="text/plain" action="<?php echo $landing;?>/assess.php">

<input class="formbutton" name="send" type="submit" value="Register for this Course"></p></form>
<p>For Additional information about this course, Get in <a href="<?php echo $landing;?>/contactable.php" onmousedown="zoom">contact</a> with Us!!!</p>
<br /><br />
<a href = "javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>
</div><div style="width: 40%; display: inline; float: left; background: url('<?php echo $landing;?>/MI ComputSolutions_files/twitterBg.png') repeat;"><div class="sh sh_blue">Cloud Tags &amp; Links</div>
<div class="cb"></div>
<div class="sh_indent"><img src="<?php echo $landing;?>/MI ComputSolutions_files/shdent_lrg_blue.gif" width="10" height="10" />
</div>
<div style="background-color:#FFFFFF;font-family:Courier new; border: 1px solid #FFFFFF; text-align:left;">
<a class="palink"  href="http://www.micomputsolutions.co.uk/partnerships.php" style="font-size:21px;text-decoration:none; color: #FF7600;">Partnerships</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Health and Social Care" style="font-size:13px;text-decoration:none; color: #DE2159;">Health and Social Care</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Functional Skills" style="font-size:17px;text-decoration:none; color: #039FAF;">Functional Skills</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/legal.php" style="font-size:16px;text-decoration:none; color: #FF7600;"> Terms and Condition</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses.php/javascript:history.back()" style="font-size:16px;text-decoration:none; color: #DE2159;"> </a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Employability and Personal Development Support" style="font-size:21px;text-decoration:none; color: #87A800;">Employability and Personal Development Support</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Support Work in Schools (QCF)" style="font-size:15px;text-decoration:none; color: #039FAF;">Support Work in Schools </a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Accounting and Bookkeeping" style="font-size:13px;text-decoration:none; color: #FF7600;">Accounting &amp; Bookkeeping</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Customer Services" style="font-size:21px;text-decoration:none; color: #DE2159;">Customer Services</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/RoomHire.php" style="font-size:21px;text-decoration:none; color: #87A800;">Room Hire</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/apprenticeships.php" style="font-size:20px;text-decoration:none; color: #FF7600;">Apprenticeships</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/about.php" style="font-size:19px;text-decoration:none; color: #87A800;">About Us</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Business Admin" style="font-size:15px;text-decoration:none; color: #039FAF;">Business Admin</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/contactable.php" style="font-size:18px;text-decoration:none; color: #FF7600;">Contact Us</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/index.php" style="font-size:17px;text-decoration:none; color: #DE2159;">Home</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/ITQ" style="font-size:22px;text-decoration:none; color: #039FAF;">ITQ</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/partners.php" style="font-size:17px;text-decoration:none; color: #039FAF;">Our Affiliates</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/service.php" style="font-size:16px;text-decoration:none; color: #87A800;">Our Services</a>
<a class="palink" href="mailto:info@micomputsolutions.co.uk" style="font-size:16px;text-decoration:none; color: #DE2159;">Email: info@micomputsolutions.co.uk</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/callto:02084690057 " style="font-size:17px;text-decoration:none; color: #DE2159;">	T: 0207 501 6450   </a>
<a class="palink" href="http://www.micomputsolutions.co.uk/legal.php#disclaimer" style="font-size:21px;text-decoration:none; color: #87A800;">Disclaimer</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/traineeship.php" style="font-size:21px;text-decoration:none; color: #DE2159;">Traineeships</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/contacteam.php" style="font-size:13px;text-decoration:none; color: #87A800;">Our Team</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Basic ICT" style="font-size:16px;text-decoration:none; color: #FF7600;">Basic ICT</a><br />
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/ESOL Citizenship" style="font-size:20px;text-decoration:none; color: #87A800;">ESOL Citizenship</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Internal Quality Assurance" style="font-size:16px;text-decoration:none; color: #039FAF;">Internal Quality Assurance Award</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/ESOL Skills for Life" style="font-size:18px;text-decoration:none; color: #FF7600;">ESOL Skills for Life</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Assessor Award" style="font-size:21px;text-decoration:none; color: #87A800;">Assessor Award</a>
<a class="palink" href="http://www.micomputsolutions.co.uk/courses/Childcare" style="font-size:21px;text-decoration:none; color: #DE2159;">Childcare</a>
</div>
<div class="sh sh_blue">Upcoming Training Events</div>
<div class="cb"></div>
<div class="sh_indent"><img src="<?php echo $landing;?>/MI ComputSolutions_files/shdent_lrg_blue.gif" width="10" height="10" /></div>
<div class="pdfw">
<div class="pdfw"><iframe  src="http://www.eventbrite.co.uk/countdown-widget?eid=7978278245" frameborder="0" height="333" width="185" 
marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe></div>
<div class="pdfw"><iframe  src="http://www.eventbrite.co.uk/countdown-widget?eid=3862314286" frameborder="0" height="333" width="185" 
marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe></div>
</div>
</div></div>

<?php require ('footer.php');?>