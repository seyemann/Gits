<?php

// load the configuration file.

require ('connect/config.php');
$wext = $row['courseName'];
$sql2 = "SELECT funderName
FROM `coursefund`
INNER JOIN courselink ON courselink.courseID = coursefund.courseID
INNER JOIN funders ON coursefund.funderID = funders.funderID
WHERE courselink.courseName = '$wext'";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
while($row = mysql_fetch_assoc($result)){
?>
<?php
  echo "<ul>";
  echo "<li>";
  echo "<span>{$row['funderName']}</a></span>";
  echo "</li>";
   echo "</ul>";
  
?>

<?php
		}
		}else{
		 ?>
		<p>N/A</p>
		<?php
		mysql_close($link);}
		?>