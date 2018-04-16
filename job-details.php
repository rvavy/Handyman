<?php
include("views/header.php");
include("helpers/db_fncs.php");
include("config/connect.inc.php");

?>
<div class="maincontent">
		<div class="content">
				<header>
                	<h2>Listed Jobs</h2>
                </header>
                    <p>				
						<?php
						include ("config/connect.inc.php");
						include ("models/job-model.php");
						//$conn=getConn();

						if(isset($_GET['job_id']))
						{
							$job_id = $_GET['job_id'];
							$conn=getConn();
	
							$job=getJobById($conn,$job_id);
						
							$conn=NULL;
							include("views/job-details-view.php");
						}
?>
					</p>
		</div>
</div>



<?php
include("views/footer.php");
?>