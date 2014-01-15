<?php session_start();
/**
 * @author seyemann
 * @copyright 2013
 */
$subtitle = "@SkillsDevCentre Updates: " . $_GET['view'];
require ('header.php');
?>
<?php

// load the configuration file.
// The HAVING clause was added to SQL because the WHERE keyword could not be used with aggregate functions.
require ('connect/config.php');
$view = $_GET['view'];
//$views = str_replace('_', ' ', $view); IF statement ends in WHERE title=views.....
$sql = "SELECT
REPLACE(title,' ','_') AS title2, article.title,
article.url,
article.img_link,
article.date_posted,
article.content,
categories.category
FROM
article
INNER JOIN categories ON article.categoryID = categories.categoryID
HAVING title2 ='$view'";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
$row = mysql_fetch_assoc($result);
?>
<div class="container_16 leftext">
	<div class="grid_10 wrapup" style="height: auto; width: 62%; margin-left: 10px; padding-left: 5px; padding-right: 8px;">
<?php
  echo "<br />";
  echo "<div style='margin-left:5%; font-size:2.5em' class='foregroundLightBluNoShadow'>{$row['title']}</div><br />";
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
  echo "<ul>";
  echo "<li> {$row['content']}</li>";
  echo "</ul><br />";
 ?> 
<?php
		}
		else{ header('Location: pagenotfound.php');
		mysql_close($link);}
		?>
<br />
</div>
<div style="width: 32%; display: inline; float: left; background: url('<?php echo $landing;?>/MI ComputSolutions_files/twitterBg.png') repeat;"><div class="sh sh_blue">Cloud Tags &amp; Links</div>
<div class="cb"></div>
<div class="sh_indent"><img src="<?php echo $landing;?>/MI ComputSolutions_files/shdent_lrg_blue.gif" width="10" height="10" />
</div>
<div style="background-color:#FFFFFF;font-family:Courier new; border: 1px solid #FFFFFF; text-align:left;">
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
</div></div>

<?php require ('footer.php');?>