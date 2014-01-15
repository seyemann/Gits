<?php
#header sent downwards cos of PHP header already sent errors, putting the ridirect logic first before calling header.php
require ('connect/config.php');
$view = $_GET['apply'];
$sql = "SELECT * FROM vacancy WHERE  closingdate >= NOW() AND ID ='$view'";
$result = mysql_query($sql) or die ( mysql_error() );
$row = mysql_fetch_assoc($result);
$_SESSION['views'] = $row['Vactitle'];
if ($row['Vacdescript'] == ''){
    header('Refresh: 0; URL=work-with-us.php');
    #echo "<meta http-equiv=\"refresh\" content=\"0; url=work-with-us.php\">";
    exit;
    exit();
    }
session_start();
$subtitle = "Apply for Job: ";
require ('header.php');
?>
<div class="centerContainer leftext">
		<div class="sidebarContainer fl">
			<div class="sidebarItem">
				<div class="sidebarHeader">
					<p style="padding: 14px; margin-left: -17px;">Recruitments</p>
				</div>
				<ul class="arrowList">
					<li class="activeSidebarItem">Overview</li>
					<li class="noBottomBorder"><a href="#form" title="">Application form</a></li>
				</ul>
			</div> 
           <div class="top" style="width: 278px; margin-left: 0;"></div> <!-- end sidebarItem -->
		</div> <!-- end sidebarContainer -->
		
		<!-- Page Container -->
		<div class="container_16" style="height: auto;">
        <div class="fl grid_10 " style="width: 65%; height: auto;"><p><a href="about.php">About Us</a> &raquo;<a href="work-with-us.php"> Work With Us</a> &raquo; Job Description</p>
        <h4><img alt="portfolio_image" src="MI ComputSolutions_files/Edit.png" height="67px" align="left"></a><span class="foregroundBlue"><em>Job Description</em></span><span class="foregroundLightBlue"></span></h4>
			<div class="sepContainer"><div style='height: 24px; width: 31%; float: right; margin-left: 10px;'><!-- AddThis Button BEGIN -->
<div class='addthis_toolbox addthis_default_style'>
<a class='addthis_button_preferred_1'></a>
<a class='addthis_button_preferred_2'></a>
<a class='addthis_button_preferred_3'></a>
<a class='addthis_button_preferred_4'></a>
<a class='addthis_button_compact'></a>
<a class='addthis_counter addthis_bubble_style'></a>
</div>
<script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f33d0df7bfc5249'></script>
<!-- AddThis Button END --></div>
<div class="container_16 leftext">
<?php
  echo "<span class = 'divider'></span><br />";
  echo "<ul>";
  echo "<li> {$row['Vacdescript']}</li>";
  echo "</ul><br />";
  mysql_close($link);
?>
<div style="margin-left: 20px;">
<a name="form"></a>
<h4 class="titleSide"> <em>Application form</em> </h4> <p></p>
<div id="contact_form" style="margin-left: 15px;">

      <iframe src='./Application-form/contactform.php' frameborder='0'
width='100%' height='650' ></iframe>

  </div></div><p>&nbsp;</p>

<a href = "javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>                                
</div></div> <!-- end pageContent -->
</div></div><div class="downwrap2"></div></div>
 <?php require ('footer.php');?>