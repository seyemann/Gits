<tr><td class="td_f"><div class="cov" style="color: #1F2F55; height: auto; text-align: center; font-size: 10px;
margin-top: 14px;">

<div class="columns">
		
			<div class="col" style="margin-left: 57px;">
				<h3 class="titleSide">Contact</h3>
				<p>
					The Queen,<br/>
					47a Bellefields Road, Brixton.<br/>
					 London. SW9 9UH |<br/>
					Email: info@micomputsolutions.co.uk | <br/>
					T: 0207 501 6450 |
				</p>
			</div><!-- /c_1 -->
			
			<div class="col" style="margin-left: 22px;">
				<h3 class="titleSide">Navigation</h3> 
				<p> 
					<a href="<?php echo $landing;?>">Home</a><br/>
                    <a href="<?php echo $landing;?>/courses.php">Courses</a><br/>
                    <a href="<?php echo $landing;?>/learners.php">Learner Services</a><br/>
                    <a href="<?php echo $landing;?>/advanced_learning_loans.php">24+ Advance Student Loan</a><br/>
                    <a href="<?php echo $landing;?>/RoomHire.php">Workspace Hire</a><br/>
				</p>
			</div><!-- /c_2 -->
			
			
			<div class="col" style="margin-left: 8px;">
				<h3 class="titleSide">Courses</h3> 
				<p>
					<a href="<?php echo $landing;?>/courses/ITQ">ITQ</a><br/>
                    <a href="<?php echo $landing;?>/courses/Health and Social Care">Health &amp; Social Care</a><br/>
                    <a href="<?php echo $landing;?>/courses/Functional Skills">Functional Skills</a><br/>
                    <a href="<?php echo $landing;?>/courses/ESOL Skills for Life">ESOL Skills for Life</a><br/>
                    <a href="<?php echo $landing;?>/courses.php">More ...</a><br/>
				</p>
			</div><!-- /c_3 -->
			
			<div class="col" style="margin-left: 8px;">
				<h3 class="titleSide">Legal</h3> 
				<p> 
				    <a href="<?php echo $landing;?>/legal.php">Terms &amp; Conditions</a><br/>
                    <a href="<?php echo $landing;?>/legal.php#disclaimer">Disclaimer</a><br/>
                    Copyright &copy; <?php echo date("Y");?> MI ComputSolutions<br />
                    <a  title="SmartBizng" href="http://www.engrige.com" target="_blank">Design: S.IGE (Engrige)</a><br/>
                    <a href="http://www.geo-tag.de" title="This page is geo-coded" target="_blank">
 <img src="http://www.geo-tag.de/icon/geotag_3.png"
  width="80" height="15" style="border-style:none;"
  alt="This page is geo-coded" />
</a>
				</p> 
			</div><!-- /c_4 -->
		
		</div>
<span class= "belter"><b>MI ComputSolutions</b> (trading as MI Skills Development Centre) is a Company Limited by Guarantee, 
    registered in England. NO. 50661C3 DPA No. - Z1075122&nbsp; </span> 
</div></div>
</td></tr>
</table>
</td></tr>
</tbody>
</table>
<script type='text/javascript'>
var supports3DTransforms =  document.body.style['webkitPerspective'] !== undefined || 
                            document.body.style['MozPerspective'] !== undefined;

function linkify( selector ) {
    if( supports3DTransforms ) {
        
        var nodes = document.querySelectorAll( selector );
        //var nodes = $( selector ).slice(7); worked not sorted

        for( var i = 0, len = nodes.length; i < len; i++ ) {
            var node = nodes[i];

//!node.className || !node.className.match( /mainlinks2/g ) -- worked on testing | document.querySelectorAll = $ in JQuery 
            if( !node.className || !node.className.match( /roll/g ) ) {
                node.className += ' roll';
                node.innerHTML = '<span data-title="'+ node.text +'">' + node.innerHTML + '</span>';
            }
        };
    }
}

linkify( 'a' );</script>
<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://www.micomputsolutions.co.uk/piwik/" : "http://www.micomputsolutions.co.uk/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://www.micomputsolutions.co.uk/piwik/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
</body>
</html>
