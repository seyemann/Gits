<?php
session_start();
require ('../header.php');
require_once("include/membersite_config.php");
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("/Registration/landing.php");
    exit;
}

/**
 * @author seyemann
 * @copyright 2011
 */
?>
<script type="text/javascript" src="../fancyapps/lib/jquery-1.7.2.min.js"></script>
<script src="../jquery.textresizer/jquery.cookie.js" type="text/javascript"></script>
	<script src="../jquery.textresizer/jquery.textresizer.js" type="text/javascript"></script>    
    <script type="text/javascript">
		$(document).ready( function() {
			$( "#textsizer-classnames a" ).textresizer({
				target: "#maincontent",
				type: "cssClass",
				sizes: [ "small-text", "medium-text", "large-text", "larger-text"],
				selectedIndex: 1
			});
		});
    </script>
<a name="top"></a>
<div class="centerContainer leftext">
		<div class="sidebarContainer fl">
			<div class="sidebarItem">
				<div class="sidebarHeader">
					<p style="padding: 14px; margin-left: -17px;">Welcome back <span style='color:#504DA5; font-size: large;'><?php echo $fgmembersite->UserFullName() ?>!</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><a style="left: 2px;" href='logout.php'>Logout</a></span></p>
				</div> 
				<ul class="arrowList">
					<li class="activeSidebarItem">Overview</li>
					<li class="noBottomBorder"><a href="#form" title="">...</a></li>
				</ul>
			</div>
           <div class="top" style="width: 277px; margin-left: 0;">
                <div class="titleSide" style="width: 230px; margin-top: 33px;margin-left: 2px; padding-left: 45px;">MEMBER PROFILE</div>
            </div>
            <div class="pot" style="width: 260px;"></div>      
            <!-- end sidebarItem -->
        </div> <!-- end sidebarContainer -->
		
		<!-- Page Container -->
		<div class="container_16" style="height: auto;">
        <div class="fl grid_10 " style="width: 65%; height: auto;"><p><a href="../partners.php">Our Affliates</a> &raquo; Partnerships</p>
        <h4><img alt="portfolio_image" src="../MI ComputSolutions_files/Briefcase.png" height="67x" align="left"/></a><span class="foregroundBlue"><em>Becoming our Partner</em></span><span class="foregroundLightBlue"></span></h4>
			<div class="sepContainer"><!-- --></div>
            
            <em><h3>Thank you for your interest in working in partnership with MI ComputSolutions. </h3></em>
<p>
We aspire to improve the accessibility of our clientele to quality services within our area of expertise, in liaison with other like minded organisations.
Based on this premise we recognise the benefit of partnership with third sector education providers, colleges, as well as local communities and authorities. 
</p><p>Please download and complete our Partnership Application Pack.</p>
<ul><li class="tablist"><a href="attachments/Covering Letter Partner Providers August 2012-2013.pdf">Covering Letter Partner Providers (PDF).</a></li>
<li class="tablist"><a href="attachments/MI ComputSolutions Expression of Interest Form.pdf">MI ComputSolutions Expression of Interest Form (PDF)</a>.</li>
<li class="tablist"><a href="attachments/MISDC Partner Capability and Staff Skills Audit.xlsm">MISDC Partner Capability and Staff Skills Audit (EXCEL)</a>.</li>
<li class="tablist"><a href="attachments/Training Provider Policy August 2012-2013.pdf">Training Provider Policy (PDF)</a>.</li>
</ul>
<br />
<p>Skills Funding Agency Guidance</p>

<ul><li class="tablist"><a href="attachments/Funding_Rules_Version_2_31May2012_FINAL.pdf">Funding Rules for 2012/2013 Version 2 (PDF)</a></li>

<li class="tablist"><a href="attachments/Revisons_Funding_Rules_Version_2_may2012_FINAL.pdf">Revisions to Funding Rules for 2012/2013 Version 2 (PDF)</a></li>

<li class="tablist"><a href="attachments/Additional_Learning_Support.pdf">Additional Learning Support Guidance (PDF)</a></li>

<li class="tablist"><a href="attachments/Discretionary_Learner_Support.pdf">Discretionary Learner Support Guidance (PDF)</a></li><br/>

</div><p>&nbsp;</p>

<a style="float: right;" href = "javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>                                
		</div></div> <!-- end pageContent -->
	<div class="downwrap2"></div></div>
 <?php require ('../footer.php');?>