<link rel="stylesheet" type="text/css" href="style.css" />
<?php
	// You can do anything with the data. Just think of the possibilities!
	include('connect/config.php');

	$strlen = strlen($_GET['content']);
	$display_count = $_GET['count'];

	$select = "SELECT courseName FROM courselink WHERE courseName like '%".$_GET['content']."%'";
	$res = mysql_query($select);
	$rec_count = mysql_num_rows($res);
    if($display_count)
	{
	  echo "There are <font color='red' size='3'>".$rec_count."</font> matching records found.Click Search to view result.";
	}
	else
	{
?>
    <center>   
	<?php
	if($rec_count > 0)
	{
		while($row=mysql_fetch_array($res))
		{ 
			echo "<p><a href='courseviewext.php?view={$row['courseName']}'>{$row['courseName']}</a></p>";
		}
	}
	else
		echo '<td colspan="5" align="center"><FONT SIZE="2" COLOR="red">No matching records found....!</FONT></td>';
  }
?>
</center>