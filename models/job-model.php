<?php
function getAllJobs($conn)
{
	$query = "SELECT * FROM job";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$allJobs=[];
	while($job=$stmt->fetch(PDO::FETCH_OBJ))
	{
		$allJobs[]=$job;
	}
	return $allJobs;
}
function getJobById($conn,$job_id)
{
	$query = "SELECT * FROM job WHERE job_id=:job_id";
	$stmt = $conn->prepare($query);
	$stmt->bindValue(':job_id',$job_id);
	$stmt->execute();
	$job=$stmt->fetch(PDO::FETCH_OBJ);
	return $job;
	
}
function insertJob($conn,$jobname,$location,$duration)
{
	$query="INSERT INTO job VALUES (NULL, :jobname, :location, :duration)";
	$stmt=$conn->prepare($query);
	$stmt->bindValue(':jobname', $jobname);
	$stmt->bindValue(':location', $location);
	$stmt->bindValue(':duration', $duration);
	$affected_rows = $stmt->execute();
	if($affected_rows==1)
	{
		return true;
	}else{
		return false;
	}
}

function deleteJob($conn,$job_id)
{
	$query = "DELETE FROM job WHERE job_id=:job_id";
	$stmt = $conn->prepare($query);
	$stmt->bindValue(':job_id',$job_id);
	$affected_rows=$stmt->execute();
	if($affected_rows==1)
	{
		return true;
	}else{
		return false;
	}
}
?>