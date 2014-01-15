<?php
/**
 * @author seyemann
 * @copyright 2011
 */
$subtitle = "Our Courses!";
require ('header.php');
?>
<div class="container_16" style="display: block !important;">
<div id="Qlinks" class="leftext" style="text-align: left;">
<h4><img alt="portfolio_image" src="MI ComputSolutions_files/Bookmark.png" height="67x" align="left"></a><span class="foregroundBlue"><em>List of Courses</em></span></h4>

<?php

// load the configuration file.

require ('connect/config.php');
$sql = "SELECT courselink.courseName FROM `courselink`";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
while($row = mysql_fetch_assoc($result)){
?>
<?php
  echo "<br />";
  echo "<div class=\"titleSide grid_5\">";
  echo "<p><a href='courses/{$row['courseName']}'>{$row['courseName']}</a></p>";
  echo "</div>"
?>

<?php
		}
		}else{
		 ?>
		<p>There are no course entries available at present</p>
		<?php
		mysql_close($link);}
		?></div>
<div style="text-align: left; position: relative; margin-top: 30px; display: inline; float: left; width: 27%">
<div><a href = "javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>   </div></div></div>
<div class="downwrap"></div>
<?php require ('footer.php');?>