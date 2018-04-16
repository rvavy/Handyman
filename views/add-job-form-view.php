<?php
include ("view_fncs.php");
showHeader("Add a new Job");
showNavigation();
?>
<form action="add-job.php" method="POST">
	<h1>Add New Job</h1>
<label for="title">Enter a Job Title:</label>
<input type="text" name="jobname" id="jobname">
<label for="title">Enter the Job Location:</label>
<input type="text" name="location" id="location">
<label for="title">Enter the Job Duration</label>
<input type="text" name="duration" id="duration">
<input type="submit" name="submitBtn" value="Add Job">
</form>
<?php
showFooter();
?>
