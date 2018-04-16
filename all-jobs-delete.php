<?php 

include ("views/header.php");

?> 



<div class="maincontent">
		<div class="content">
            	<header>
                	<h2>Please Delete Jobs Below</h2>
                </header>
                    <p>Below is a list of all the different jobs which belong to the Handyman Agency.<br />
				
					<?php

include ("helpers/db_fncs.php");
include ("models/job-model.php");
$conn=getConn();
$allJobs=getAllJobs($conn);
$conn=NULL;
include("views/delete-jobs-form-view.php")
?>

				<form action="all-jobs-delete.php" method="POST">
<input type="submit" name="submitBtn" value="Refresh Jobs">
</form>


								
					<br />
					 </p>
        </div>
</div>



<?php 
include ("views/footer.php");

?> 
 
