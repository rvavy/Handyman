<?php

function showHeader($jobname="The Job Site")
{
	echo '<!DOCTYPE HTML>';
	echo '<html>';
	echo '<head>';
	echo '<title>'.$jobname.'</title>';
	echo '<meta http-equiv="content-type" content="text/html;charset=utf-8" />';
	echo '</head>';
	echo '<body>';
}
function showNavigation()
{ 
echo '<nav id = "navbar">';
	echo '<ul>';
	echo '<li><a href="all-jobs.php">View Jobs</a></li>'; 
	echo '<li><a href="all-jobs-delete.php">Delete Jobs</a></li>';
	echo '<li><a href="add-job-form.php">Add Jobs</a></li>';
	echo '</ul>';
	
	echo '</nav>';
}

function showFooter()
{
	echo '</body>';
	echo '</html>';
}

?>