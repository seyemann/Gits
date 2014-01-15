<?php session_start();
/**
 * @author seyemann
 * @copyright 2011
 * 
 * 
 * If you are using templates with numerous includes then exit() will end you script and your template will not complete
 *  (no </table>, </body>, </html> etc...).  Rather than having complex nested conditional logic within your content, 
 * just create a "footer.php" file that closes all of your HTML and if you want to exit out of a script just include() 
 * the footer before you exit().
 */  
$subtitle = "First stage course enrolment";
require ('header.php');
	if (($_SESSION['courseName'] == 'Assessor Award') || ($_SESSION['courseName'] == 'Internal Quality Assurance') ) {
            echo "<iframe src='htmlform/htmlform.php' id='myiframe' frameborder='0' width='100%' scrolling='no' height='2170' style='overflow: hidden' allowfullscreen>";
            echo "</iframe>";
            require ('footer.php');
            exit();
	} else {echo "<iframe src='assessment/assessment.php' frameborder='0' width='100%' height='2050' allowfullscreen>";
            echo "</iframe>";
            require ('footer.php');
exit();
}
?>