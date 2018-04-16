<?php 

require_once("views/header.php");

?>

<div class="maincontent">
		<div class="content">
		<p> Please make sure that you only visit the links within the main content page, exiting the page and revisiting will log you out. </p>
            
					<form action="all-jobs.php" method="POST">
<input type="submit" name="submitBtn" value="Refresh Jobs">
</form>
					<?php
include ("helpers/db_fncs.php");
include ("models/job-model.php");
$conn=getConn();
$allJobs=getAllJobs($conn);
$conn=NULL;
include("views/all-jobs-view.php")
?>
			
							
					<br />
					 </p>
        </div>
</div>


<?php 

require_once ("views/footer.php");

?>