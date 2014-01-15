<?php
/**
 * @author seyemann
 * @copyright 2011
 */
session_start();
$subtitle = "Learner Services";
require ('header.php');
$_SESSION['views'] = 'CV Bank Submission';
?>
<div class="centerContainer leftext">
		<div class="sidebarContainer fl">
			<div class="sidebarItem">
				<div class="sidebarHeader">
					<p style="padding: 14px; margin-left: -17px;">WHAT WE OFFER</p>
				</div>
				<ul class="arrowList">
					<li class="activeSidebarItem">Overview</li>
					<li><a href="#pre" title="">Pre-Apprenticeships</a></li>
					<li><a href="#apprenticeships" title="">Apprenticeships</a></li>
                    <li><a href="#adult" title="">Adult Learners</a></li>
                    <li><a href="#24+loan" title="">24+ Advanced Learning Loans</a></li>
                    <li><a href="#seekers" title="">Job Seekers Support</a></li>
                    <li class="noBottomBorder"><a href="#guide" title="">Advice and Guidance</a></li>
				</ul>
			</div> 
            <div class="top" style="width: 278px; margin-left: 0;"></div><!-- end sidebarItem -->
		</div> <!-- end sidebarContainer -->
		
		<!-- Page Container -->
		<div class="container_16" style="height: auto;">
        <div class="fl grid_10 " style="width: 65%; height: inherit;"><p><a href="service.php">Our Services</a> &raquo; Learner Services</p>
        <h4><img alt="portfolio_image" src="MI ComputSolutions_files/Briefcase.png" height="67x" align="left"></a><span class="foregroundBlue"><em>Learners</em></span><span class="foregroundLightBlue"></span></h4>
			<div class="sepContainer"><!-- --></div>
			
			<ul id="servicesList">
            <br />
				<li>
					<a name="pre"> </a>
					<h3 class="titleSide">Pre-Apprenticeships</h3>
					
					<p>Are you aged 16-18 years old? Looking for help finding training and/or work experience; or even deciding on a career? 
                    If this applies to you, look no further as we have the staff expertise and an enabling learning environment for
                    you to work towards a range of qualifications personalised for your unique needs, abilities, interests and skillset.</p>
				    <p><a href="quicklink.php?key=3">Learn More</a></p>	
				</li>
                <br />
                <li>
					<a name="apprenticeships"> 	</a>
					<h3 class="titleSide">Apprenticeships</h3>
					
					<p>An apprenticeship is a great way for individuals to 'earn as they learn' and for employers to discover skilled and talented employees through a government-backed training scheme which provides a structured learning route within a working environment.
                     The schemes are focused on motivated people who are determined to succeed within their workplace..</p>
                    <p><a href="apprenticeships.php">Learn More</a></p>
			
                </li>
                <br />
                <li>
					<a name="adult"> </a>
					<h3 class="titleSide">Adult Learners</h3>
					
					<p>We have courses tailored for persons aged 18 and above, to help improve on existing skills or learning a new skill altogether. 
					For a quick view of the courses/training that we have in place.</p>
                     <p><a href="quicklink.php?key=2">Learn More</a></p>
				
                </li>
                <br />
                <li>
					<a name="24+loan"> 	</a>
					<h3 class="titleSide">24+ Advanced Student Loan</h3>
					
					<p>The government is introducing student loans for learners aged 24 and above in further education and training studying at Level 3 and above, including Advanced and Higher Apprenticeships. They will be called 24+ Advanced Learning Loans and will apply to those starting their course or apprenticeship on or after 1 August 2013.</p>
                     <p><a href="advanced_learning_loans.php">Learn More</a></p>
                </li>
                <br />
                <li>
					<a name="seekers"> </a>
					<h3 class="titleSide">Job Seekers Support</h3>
					
					<p>Our Job Seekers support service is aimed at matching your skill set, passions and interest with a suitable role. 
					Why not forward your CV to us today, and be part of the growing numbers of persons we have helped place in sustainable employment.
                    You can also join our <a href="job_plus.php">JOB Plus</a> programme, if u meet the eligibility requirements </p><p>Click on the relevant links below.</p>
				
                <article class="accordion">

	<section id="acc1">
		<h2><a href="learners.php#acc1">Register your CV</a></h2>
		<iframe src='./Application-form/contactform.php' frameborder='0'
width='100%' height='600' ></iframe>
		<p class="accnav"><a href="learners.php#acc2">next</a></p>
	</section>
	
	<section id="acc2">
		<h2><a href="work-with-us.php">Apply for Vacancies</a></h2>
        <p class="accnav"><a href="learners.php#acc1">previous</a></p>
	</section></article>
                </li>
                <br />
                <li>
					<a name="guide"> </a>
					<h3 class="titleSide">Advice and Guidance</h3>
					
					<p>Our specialist guidance and counselling staff are available to lead you through your path to excellence irrespective of individual learning 
                    difficulties and circumstance, coupled with our client support staff who are always on hand to enlighten you with regards to your enquiries.
                    </p>
                    <p>Drop in into one of our centers for a comprehensive overview of the oppourtunities abound for you to choose from.</p>
                </li>
                <br />
                </ul>
                <br /><br />
<a href = "javascript:history.back()"><span style="color:#FF0084;"> <<<| Back to Previous Page</span></a>                                
		</div></div> <!-- end pageContent -->
	<div class="downwrap2"></div></div>
 <?php require ('footer.php');?>