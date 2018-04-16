<?php 

require_once("views/header.php");

?>

<div class="maincontent">
		<div class="content">
            
					<?php
include ("helpers/db_fncs.php");
include ("models/job-model.php");
$conn=getConn();
$allJobs=getAllJobs($conn);
$conn=NULL;
include("views/all-jobs-view.php")
?>
				<form action="all-jobs.php" method="POST">
<input type="submit" name="submitBtn" value="Refresh Jobs">
</form>
			
							
					<br />
					 </p>
        </div>
</div>


<?php 

require_once ("views/footer.php");

?>
