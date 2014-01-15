<div>
<?php

// load the configuration file.

require ('connect/config.php');
$sql = "SELECT * FROM vacancy WHERE  closingdate >= NOW() ORDER BY VacancyType";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
while($row = mysql_fetch_assoc($result)){
?>
<?php
  echo "<br />";
  echo "<div class='container_16'>";  
  echo "&nbsp;&nbsp;<div class='grid_5a'><a href='recruitment.php?apply={$row['ID']}'>{$row['Vactitle']}&nbsp;</a></div>";
  echo "<div class='grid_4'>{$row['Location']}</div>";
  echo "<div class='grid_4'>{$row['vacancyType']}&nbsp;</div>";
  echo "</div>";
?>

<?php
		}
		}else{
		 ?>
		<p>There are no VACANCIES available at present</p>
		<?php
		mysql_close($link);}
		?>
        </div>