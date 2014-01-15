<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- force IE 10 to opt into Internet Explorer 9 behavior -->
<!--
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="author" content="MI ComputSolutions"/>
<meta name="description" content="Whether you want to get a new business off the ground, improve your career prospects or simply learn something new, MI has something to suit you."/>
<meta name="geo.region" content="GB-LBH" />
<meta name="geo.placename" content="London" />
<meta name="geo.position" content="51.464239;-0.116965" />
<meta name="ICBM" content="51.464239, -0.116965" />
<?php $txt1 = $_SERVER['SERVER_NAME'];
$txt2 = "http://";
$landing = $txt2. "" .$txt1;?>
<script type="text/javascript" src="<?php echo $landing;?>/fancyapps/lib/jquery-1.7.2.min.js"></script>
<script src="<?php echo $landing;?>/MI ComputSolutions_files/highlight.js"></script>
<script src="<?php echo $landing;?>/MI ComputSolutions_files/runonload.js"></script>
<script src="<?php echo $landing;?>/MI ComputSolutions_files/ajaxform.js"></script>
<script src="<?php echo $landing;?>/MI ComputSolutions_files/sisyphus.js"></script>
<script type="text/javascript">
$(function () {
   $( "form" ).sisyphus({
        locationBased: true,
        timeout: 15
    });
});
</script>

 <!-- Include jQuery first. -->
				
        <!-- Include the below script, Copyright 2010, Brandon Aaron for scrollwheel support. LINK REMOVED-->

		<link rel="stylesheet" type="text/css" href="<?php echo $landing;?>/slidedeck.skin.css" media="screen" />
        <!-- Styles for the skin that only load for Internet Explorer -->
        <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="slidedeck.skin.ie.css" media="screen,handheld" />
        <![endif]-->
<!-- Include the SlideDeck jQuery script. -->
		<script type="text/javascript" src="<?php echo $landing;?>/slidedeck.jquery.lite.js"></script>
<title><?php if (isset($subtitle)) { echo $subtitle; } else {echo "MI ComputSolutions: Invest in knowledge...";} ?></title>
<!-- *** text resizer ***  -->
<script src="<?php echo $landing;?>/jquery.textresizer/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo $landing;?>/jquery.textresizer/jquery.textresizer.js" type="text/javascript"></script>    
    <script type="text/javascript">
		jQuery(document).ready( function() {
			jQuery( "#textsizer-classnames a" ).textresizer({
				target: "#maincontent",
				type: "cssClass",
				sizes: [ "small-text", "medium-text", "large-text", "larger-text"],
				selectedIndex: 1
			});
		});
    </script>
<link rel="shortcut icon" href="<?php echo $landing;?>/favicon.ico"/>
<link href="<?php echo $landing;?>/MI%20ComputSolutions_files/micomput.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 9]>
<style>
.wamp, .iehack {margin-top: -16px}
.tweet, .query {font-size: 112%}
.white {font-size: 110%}
</style>
<![endif]-->
<!--[if IE 8]>
<style>
.wamp, .iehack {margin-top: -16px}
</style>
<![endif]-->
<!--[if IE 7]>
<style>
body{overflow: hidden;}/*dropdown*/
.body{z-index: -1;}
.uxx, .uxx p{line-height: normal;}
.body {top: 30px;}
.down {max-height: 30px; top: -7px;}
.upp{z-index: 2001; top: -5px;}
.midbelt {margin-top: 30px; margin-left: 5px; margin-right: 2px;}
.date {visibility: hidden;}
#mainlinks{display: block; top: -10px;}
#mainlinks li{display: inline;}/*inline ie7 solut*/
/*dropdown*/#mainlinks li ul{
	z-index:2000;
    top: 22px;
    }
.grid_4{margin-left:0; margin-right:0; padding-left: 15px;}
</style>
<![endif]-->
<!--[if lte IE 6]>
<script type="text/javascript" src="http://deathtoie6.com/recommend-annoying.js" ></script><![endif]-->
</head>
<body>
<table cellpadding="0" cellspacing="2" align="center" width="100%" border="0">
<tbody>
<tr><td align="center" style="position: relative;">
<div style="z-index: 255px; top: 25%; position: fixed; left: 0">
<table cellpadding="0" cellspacing="2" border="0" bgcolor="#FFFFFF">
<tr><td class="down"><img src="<?php echo $landing;?>/MI%20ComputSolutions_files/follow00.png" width="30" border="0" /></td></tr>
<tr><td class="down"><a href="http://www.facebook.com/pages/MI-ComputSolutions/168390129924121" target="_blank"><img src="<?php echo $landing;?>/MI%20ComputSolutions_files/facebook.png" width="30" border="0" /></a></td></tr>
<tr><td class="down"><a href="http://twitter.com/#!/skillsdevcentre" target="_blank"><img src="<?php echo $landing;?>/MI%20ComputSolutions_files/twitter0.png" width="30" border="0" /></a></td></tr>
</table></div>
<table width="960px" class="bord" cellpadding="0" cellspacing="0" border="0">
<tr><td class="td_f" align="center">
<div class="td_bg">
<table class="pdfw">
    <tr>
        <div style="float: left; padding-top: 9px;">
            <img src="<?php echo $landing;?>/MI%20ComputSolutions_files/banner.png" alt="MISDC_logo" align="left" />
        </div>
    </tr>
</table>
<table class="inner pdfw" style="float: right; padding-top: 1.5%;" cellspacing="0" border="0">
    <tr>
        <td class="upp">
            <div id="textsizer-classnames" style="display:inline">
<div style="position: relative; display: inline; float: right; width: 250px; margin-top: -3px; right: -10px;"><?php require ('search.php'); ?></div>
			   <p>Text Size:</p>
			   <ul class="textresizer">
				   <li><a href="#nogo" class="small-text" title="Small">A</a></li>
				   <li><a href="#nogo" class="medium-text" title="Medium">A</a></li>
				   <li><a href="#nogo" class="large-text" title="Large">A</a></li>
              </ul>
			</div>| <a target="_blank" href="http://intralink.micomputsolutions.co.uk"><strong>IntraLink</strong></a> | </td></tr>
<tr><td class="down"><br />
<div id="mainlinks"><ul><li><a href="<?php echo $landing;?>">Home</a></li>
<li><a href="<?php echo $landing;?>/service.php">Services</a>
<ul><li><a href="<?php echo $landing;?>/courses.php">Courses</a></li>
<li><a href="<?php echo $landing;?>/RoomHire.php">Room Hire</a></li></ul>
</li>
<li><a href="<?php echo $landing;?>/about.php">About Us</a>
<ul><!--
<li><a href="<?php echo $landing;?>/contacteam.php" target="_top">Our Team</a></li>
-->
<li><a href="<?php echo $landing;?>/work-with-us.php">Work With Us</a></li>
</ul></li>
<li><a href="<?php echo $landing;?>/update.php">Events &amp; Updates</a></li>
<li><a href="<?php echo $landing;?>/partners.php">Our Affiliates</a>
<ul><li><a href="<?php echo $landing;?>/partnerships.php" target="_top">Partnerships</a></li></ul>
</li>
<li><a style="padding-right: 3px;" href="<?php echo $landing;?>/contactable.php">Contact Us</a></li>
<script language="javascript">setPage()</script>
</ul></div>
</td></tr>
</table>
</div>
<div id="maincontent" class="medium-text">
<noscript>
  <h1>Hello! we have a problem</h1>
  <p>It appears that your web browser does not support JavaScript,
      or you have temporarily disabled scripting. Either way, this site
      won't work without it!
</noscript>
