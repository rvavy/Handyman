<?php
include ("view_fncs.php");
showHeader("Delete Jobs");
showNavigation();

echo "<form action='delete-jobs.php' method='POST'>";
foreach($allJobs as $job)
{
	echo "<div>";
	echo "<label>".$job->jobname."</label>";
	echo "<input type='checkbox' value='".$job->job_id."' name='jobs[]'/>";
    echo "</div>";
}
echo "<input type='submit' name='deleteJobsBtn' value='delete jobs'>";
echo "</form>";

showFooter();
?>