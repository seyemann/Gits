<?php 
 if (($_SERVER['SERVER_NAME']!="www.micomputsolutions.co.uk"))#use || as or && and if joined in 1 statement
 if (($_SERVER['SERVER_NAME']!="micomputsolutions.co.uk")){
   echo "piss off, hackers!";
  die(); }

$link = mysql_connect("www.micomputsolutions.co.uk","rooted", "micomput");
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
mysql_select_db ("misolutions", $link);
?>