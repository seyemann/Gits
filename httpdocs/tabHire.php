<html>
<head>
</head>
<body>
<table class="room_hire" cellpadding="0" cellspacing="0">
    <thead>
      <tr>
        <th rowspan="2" class="col1">Room hire</th>

        <th rowspan="2" class="col2">Capacity</th>

        <th colspan="2" class="col3">Rates</th>
</tr><tr>
        <th class="col3a">Half day</th>

        <th class="col3b">Full day</th></tr>
</thead>
<?php

// load the configuration file.

require ('connect/config.php');
$sql = "SELECT roomhi.RoomName, roomhi.Capacity, roomcharge.FullDayCharge, roomcharge.HalfDayCharge FROM `roomhi`
INNER JOIN roomcharge ON roomcharge.RoomID = roomhi.RoomID
WHERE roomcharge.EndDate IS NULL ORDER BY roomcharge.RoomID LIMIT 0, 4";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
while($row = mysql_fetch_assoc($result)){
?>
<?php
  echo "<tbody>";
  echo "<tr class='tr1'>";
  echo "<td class='col1'>{$row['RoomName']}</a></td>";
  echo "<td class='col2'>{$row['Capacity']}</a></td>";
  echo "<td class='col3a'>&pound;{$row['HalfDayCharge']}</a></td>";
   echo "<td class='col3b'>&pound;{$row['FullDayCharge']}</a></td>";
  echo "</tr>";
  echo "</tbody>";
?>

<?php
		}
		}else{
		 ?>
		<p>N/A</p>
		<?php
		mysql_close($link);}
		?>
</table><br />
<table class="room_hire" cellpadding="0" cellspacing="0">
    <thead>
      <tr>
        <th rowspan="2" class="col1">IT Suite Hire</th>

        <th rowspan="2" class="col2">Capacity</th>

        <th colspan="2" class="col3">Rates</th>
</tr>
</thead>
<?php

// load the configuration file.

require ('connect/config.php');
$sql = "SELECT roomhi.RoomName, roomhi.Capacity, roomcharge.FullDayCharge, roomcharge.HalfDayCharge FROM `roomhi`
INNER JOIN roomcharge ON roomcharge.RoomID = roomhi.RoomID
WHERE roomcharge.EndDate IS NULL ORDER BY roomcharge.RoomID LIMIT 4, 6";
$result = mysql_query($sql) or die ( mysql_error() );
$num=mysql_num_rows($result);        
if($num > 0){
while($row = mysql_fetch_assoc($result)){
?>
<?php
  echo "<tbody>";
  echo "<tr class='tr1'>";
  echo "<td class='col1'>{$row['RoomName']}</a></td>";
  echo "<td class='col2'>{$row['Capacity']}</a></td>";
  echo "<td class='col3'> Call for Rates </a></td>";
  echo "</tr>";
  echo "</tbody>";
?>

<?php
		}
		}else{
		 ?>
		<p>N/A</p>
		<?php
		mysql_close($link);}
		?>
</table>
</body></html>