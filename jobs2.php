<?php
include("views/header.php");
include ("config/connect.inc.php");
?>

<div class="maincontent">
		<div class="content">
            	<header>
                	<h2>All of the different HandyMan Jobs</h2>
                </header>
                    <p>Below is a list of all the different jobs.<br />
					<br />
					 </p>
					 
					 
					 <br> </br>
<form action='jobs2.php' method=post>
	
     
        <tr><td><input type="submit" value="Update Jobs" name="B1"></td>
   	
    </form>
	
	
	
	<br> </br> 
	
				 
<?php
// Displays all Job information

$stmt = $conn->prepare("SELECT * FROM job");
$stmt->execute();
$result = $stmt;

 echo 
    "<table border='1'>
    <tr>
    <th>job_id</th>
    <th>jobname</th>
	<th>location</th>
	<th>duration</th>
   
    </tr>"
    ;

    foreach($result as $row)
    {
	// Outputs result in table row
  echo "<tr>";
  echo "<td>" . $row['job_id'] . "</td>";
  echo "<td>" . $row['jobname'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['duration'] . "</td>";
  
 
}

  echo "</tr>";
  echo "</table>";
  
  


?>


					 
					 
        </div>
</div>


<?php



include("views/footer.php");
?>