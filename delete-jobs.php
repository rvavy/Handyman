<?php

include ("views/header.php");

?>


<div class="maincontent">
		<div class="content">
            	<header>
                	<h2>Please Add a Job below</h2>
                </header>
                    <p><br />
					
<?php
include ("helpers/db_fncs.php");
include ("models/job-model.php");

//they didn't submit the form
if(!isset($_POST["deleteJobsBtn"]))
{
	header("Location:all-jobs-delete.php");
	exit;
}

$msg;
//validate
if(isset($_POST['jobs']))
{
	$jobs=$_POST['jobs'];
	$conn=getConn();
	$count=0;
	foreach ($jobs as $job_id) 
	{
		if(deleteJob($conn,$job_id))
		{
			$count++;
		}
	}
	$conn=NULL;
	$msg="Successfully deleted $count jobs";
}else{
	$msg="You need to select some jobs to delete";
}
?>

<?php
include("views/delete-feedback-view.php")

?>

								
					<br />
					 </p>
        </div>
</div>


<?php

include ("views/footer.php");

?>
