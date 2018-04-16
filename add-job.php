<?php
require_once ("views/header.php");
?>



<div class="maincontent">
		<div class="content">
            	<header>
                	<h2>Please add a Job Below!</h2>
                </header>
                    <p><br />
					
<?php
include ("helpers/db_fncs.php");
include ("models/job-model.php");
include ("helpers/validation_fncs.php");

//check if they've submitted the form
if(!isset($_POST["submitBtn"]))
{
	header("Location:add-job-form.php");
}
//get the form data
$jobname=$_POST['jobname'];
$location=$_POST['location'];
$duration=$_POST['duration'];

//$validate the form data
$validForm=true;
$errorMsgs=[];

if(!complete($jobname))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a job name</p>";
}

if(!complete($location))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a location</p>";
}

if(!complete($duration))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a job duration</p>";
}

if(!$validForm)
{
	include("views/add-job-error-view.php");
	exit;
}

//Now try and insert the data
$conn=getConn();
$success=insertJob($conn,$jobname,$location,$duration);
$conn=NULL; //close the connection

if($success)
{
	include("views/add-job-confirm-view.php");

}else
{
	$errorMsgs[]="Problem inserting data into the database";
	include("views/add-job-error-view.php");
}



?>
			<br />
					 </p>
        </div>
</div>

<?php

require_once ("views/footer.php");

?>

