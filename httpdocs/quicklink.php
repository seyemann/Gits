<?php
/**
 * @author seyemann
 * @copyright 2011
 */
$subtitle = "Training Programme";
require ('header.php');
?>
<?php

// load the configuration file.

require ('connect/config.php');
$kwiklink = $_GET['key'];
$sql = "SELECT * from `quicklinks` where QID = $kwiklink";
$result = mysql_query($sql) or die ( mysql_error() );
$row = mysql_fetch_assoc($result);
?>
<div>
<div id="Qlinks" class="leftext">
<div class="wrapup">
<?php
  echo "<br />";
  echo "<span class='foregroundLightBlue' style='font-size: 3.2em;'>&nbsp;&nbsp;&nbsp;{$row['Q_Name']}</span><br />";
  echo "<ul><strong>Overview:</strong><br />";
  echo "<br />";
  echo "{$row['whatis']}<br />";
  echo "</ul> <br/>";
  echo "<ul><strong>Benefits</strong><br/>";
  echo "<br />";
  echo "<li> {$row['benefit']}</li>";
  echo "</ul>";
  echo "<br />";
  echo "<ul><strong>Eligibility</strong><br/>";
  echo "<br />";
  echo "<li> {$row['eligibility']}</li>";
  echo "</ul><br />";
  echo "<ul><strong>Available Courses</strong>";
    mysql_close($link);
?> <?php require('returncourses.php');?>
<br />
<p><em>For additional information, get in <a href="contactable.php" onmouseover="zoom">contact</a> with Us!!!</em></p>
<br /><br />
<a href = "javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>
</div></div>
<div class="sidewrap wrapup"><img src="MI ComputSolutions_files/man.png" alt="man" align="absmiddle" /></div>

<div class="downwrap"></div></div>
<?php require ('footer.php');?>