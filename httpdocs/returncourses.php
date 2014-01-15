<?php

// load the configuration file.

require ('connect/config.php');
$kwik = $row['Q_Name'];
$sql = "SELECT * from `courselink` where Qlink1 = '$kwik' OR Qlink2 = '$kwik' OR Qlink3 = '$kwik'";
$result = mysql_query($sql) or die ( mysql_error() );
//$row = mysql_fetch_assoc($result);..caused skipping of first entry... repetition of line 12
$num=mysql_num_rows($result);
if($num > 0){
while($row = mysql_fetch_assoc($result)){
{
?>
<div>
<?php
  echo "<br />";
  echo "<span><a href='courses/{$row['courseName']}'>{$row['courseName']}</a></span><br />";
  }
?> </div>
<?php
		}
        }else{
		 ?>
         <p>N/A</p>
         <?php
		mysql_close($link);}
		?>