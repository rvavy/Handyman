
<?php
include ("view_fncs.php");
showHeader("Job Details");
showNavigation();

echo "<h1>Job Details</h1>";
echo "<ul>";
echo "<li>Job Name:".$job->jobname."</li>";
echo "<li>Location:".$job->location."</li>";
echo "<li>Duration:".$job->duration."</li>";
echo "</ul>";

showFooter();

?>