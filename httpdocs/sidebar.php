<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./script/jquery.ui.all.css" type="text/css"/>
<script type="text/javascript" src="./script/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="./script/jquery.ui.accordion.min.js"></script>
<style type="text/css">
.ui-accordion .ui-accordion-header
{
   font-family: 'Open Sans', Arial;
   font-size: 0.99em;
   height: 36px;
   font-weight: normal;
   font-style: normal;
}
.ui-accordion .ui-accordion-header a
{
   padding: 10px 10px 10px 30px;
}
.ui-accordion .ui-accordion-header .ui-icon
{
   left: 10px;
}
.ui-accordion .ui-accordion-content
{
   padding: 0 0 0 0;
}
.txx{
	width: 100%;
	margin: 0 0 5px 0;
	padding: 0 0 0 0;
	/*font-weight: bold;
	border-bottom: 1px dotted #B9CAF3;*/
	display: block;
	font-family: 'Open Sans', sans-serif;
	color: #BCCAEC;
}
.botom{
	width: auto;
	height: auto;
	/*clip: rect(10px, 10px, 0, 0);*/
	/*top: 10px;*/
	bottom: 5px;
	right: 0;
	margin: 0 auto;
    margin-right: 13px;
    float:right;
}
.auto-style1 {
	margin-left: 40px;
}
</style>
<script type="text/javascript">
$(document).ready(function()
{
   var jQueryAccordion1Opts =
   {
      event: 'mouseover',
      animated: 'slide',
      icons: {header:'ui-icon-grip-dotted-vertical', headerSelected:'ui-icon-grip-diagonal-se'},
      header: 'h3',
      fillSpace: 'true'
   };
   $("#jQueryAccordion1_id").accordion(jQueryAccordion1Opts);
});
</script>
</head>
<body>
<div id="jQueryAccordion1_id" style="width:256px;">
<h3 style="display:block"><a href="apprenticeships.php" style="width: 39%;">Apprenticeships</a></h3>
<div>
</div>
<h3 style="display:block"><a href="traineeship.php" style="width: 31%;">Traineeships</a></h3>
<div>
</div>
<h3 style="display:block"><a target="_blank" href="https://surveys.ofsted.gov.uk/survey?token=2v8g" style="width: 41.5%;">Employer Survey</a></h3>
<div>
</div>
<!--
<h3 style="display:block"><a href="quicklink.php?key=6" style="width: 32%;">Volunteering</a></h3>
<div>
</div>
-->
<h3 style="display:block; background-image: url('./MI ComputSolutions_files/learningassistant.png'); background-position: right; background-repeat: no-repeat;"><a href="https://system.learningassistant.com/MICOMPUTE/" style="width: 27%;">E-Portfolio</a></h3>
<div>
</div>
<h3 style="display:block"><a href="job_plus.php" style="width: 50%;">Job Plus Programme</a></h3>
<div>
</div>
<h3 style="display:block"><a href="quicklink.php?key=2" style="width: 46%;">For Adult Learners</a></h3>
<div>
</div>
<h3 style="display:block; background-image: url('./MI ComputSolutions_files/bak.jpg') ;opacity:0.7;
filter:alpha(opacity=70); /* For IE8 and earlier */"><a href="https://micomputsolutions.advancelearningzone.com/">
<font style="padding-left: 98px;">Learning</font></a></h3>
<div>
</div>
</div>
</body>
</html>