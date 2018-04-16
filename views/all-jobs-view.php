<?php
include ("view_fncs.php");
showHeader("Show All Jobs");
showNavigation();


foreach($allJobs as $job){
	echo "<p>";
	echo "<a href='job-details.php?job_id=".$job->job_id."'>";
    echo $job->jobname;
    echo "</a>";
    echo "</p>";
}
showFooter();

?>