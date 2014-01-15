<?php
/**
 * @author seyemann
 * @copyright 2013
 */
$subtitle = "MI. Updates";
require ('header.php');
?>
<div class="container_16 leftext" style="display: block;">
<div class="grid_10 wrapup" style="height: auto; width: 66%; margin-left: 10px;">
<h4><img alt="portfolio_image" src="MI ComputSolutions_files/Keyboard.png" height="67x" align="left"></a><p style="padding-top: 13px; font-family: cambria;" class="foregroundBlue"><em>Updates</em></p></h4>

<?php

// load the configuration file.

require ('connect/config.php');
$sql = "SELECT
REPLACE(title,' ','_') AS title2,
article.title,
article.url,
article.img_link,
article.date_posted,
article.preview_content,
categories.category
FROM
article
INNER JOIN categories ON article.categoryID = categories.categoryID ORDER BY date_posted DESC";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
while($row = mysql_fetch_assoc($result)){
?>
<?php
  echo "<div style=\"padding-left:10px; display:inline-block\">";
  echo "<br />";
  echo "<div class=\"blog_top\"></div>";
  echo "<div class=\"blog_content\">";
  echo "<div style=\"font-size: 1.5em\"><a class=\"palink\" href='updates/{$row['title2']}'><span style=\"color:#005291;font-weight:bolder\">{$row['title']}</span></div>";
  echo "<span class=\"divider\"></span>";
  echo "<p>{$row['preview_content']}</a></p>";
  echo "</div>";
  echo "<div class=\"blog_bottom\"></div>";
  echo "</div>";
?>
<?php
		}
		}else{
		 ?>
		<p>There are no updates available at present</p>
		<?php
		mysql_close($link);}
		?>
        </div>
<div class="iehack grid_4" style="text-align: left; position: relative; display: inline; float: left; width: 31%; overflow: auto; background-image: url('MI ComputSolutions_files/bkgd.png'); background-repeat: repeat-x;">
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMI-ComputSolutions%2F168390129924121&amp;width=292&amp;height=750&amp;colorscheme=light&amp;show_faces=true&amp;border_color=none&amp;stream=true&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:750px;" allowTransparency="true">
</iframe>
</div>
</div></div>
<?php require ('footer.php');?>