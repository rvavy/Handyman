<?php
include("views/header.php");
include("config/connect.inc.php");
?>

<div class="maincontent">
		<div class="content">
            	<header>
                	<h2>Design Data of the Clients and Jobs</h2>
                </header>
                    <p>Below is the different tables for the jobs and clients..<br />
				
	<br> </br> 
					
	<b> This is the Table of Client information</b>				
<?php


$stmt = $conn->prepare("SELECT * FROM Client");
$stmt->execute();
$result = $stmt;

 echo 
    "<table border='1'>
    <tr>
    <th>ClientID</th>
    <th>firstName</th>
	<th>lastName</th>
    <th>Street</th>
    <th>City</th>
    <th>County</th>
    <th>Postcode</th>
	<th>PhoneNo</th>
	<th>Email</th>
    </tr>"
    ;

    foreach($result as $row)
    {
  echo "<tr>";
  echo "<td>" . $row['ClientID'] . "</td>";
  echo "<td>" . $row['firstName'] . "</td>";
  echo "<td>" . $row['lastName'] . "</td>";
  echo "<td>" . $row['Street'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['County'] . "</td>";
  echo "<td>" . $row['Postcode'] . "</td>";
  echo "<td>" . $row['PhoneNo'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
 
}

  echo "</tr>";
  echo "</table>";
  
  


?>

<br> </br> 

<b> This is the Table of Job information</b>				
<?php


$stmt = $conn->prepare("SELECT * FROM job");
$stmt->execute();
$result = $stmt;

 echo 
    "<table border='1'>
    <tr>
    <th>JobID</th>
    <th>JobName</th>
	<th>Location</th>
    <th>Duration</th>
  
    </tr>"
    ;

    foreach($result as $row)
    {
  echo "<tr>";
  echo "<td>" . $row['job_id'] . "</td>";
  echo "<td>" . $row['jobname'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['duration'] . "</td>";

 
}

  echo "</tr>";
  echo "</table>";
  
  


?>

<br> </br> 
<b> This is the table of the Admin Details</b>

<?php


$stmt = $conn->prepare("SELECT * FROM admin");
$stmt->execute();
$result = $stmt;

 echo 
    "<table border='1'>
    <tr>
    <th>AdminID</th>
    <th>firstName</th>
	<th>lastName</th>
    <th>Street</th>
    <th>City</th>
    <th>County</th>
    <th>Postcode</th>
	<th>PhoneNo</th>
	<th>Email</th>
  
    </tr>"
    ;

    foreach($result as $row)
    {
  echo "<tr>";
  echo "<td>" . $row['AdminID'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Street'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['County'] . "</td>";
  echo "<td>" . $row['Postcode'] . "</td>";
  echo "<td>" . $row['PhoneNo'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
 
}

  echo "</tr>";
  echo "</table>";
  
  


?>

<br> </br>


<b> This is the table of the Admin Details</b>

<?php


$stmt = $conn->prepare("SELECT * FROM Employee");
$stmt->execute();
$result = $stmt;

 echo 
    "<table border='1'>
    <tr>
    <th>EmployeeID</th>
	<th>Username</th>
    <th>Name</th>
	<th>Street</th>
    <th>City</th>
    <th>County</th>
    <th>Postcode</th>
	<th>PhoneNo</th>
	<th>Email</th>
  
    </tr>"
    ;

    foreach($result as $row)
    {
  echo "<tr>";
  echo "<td>" . $row['EmployeeID'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Street'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['County'] . "</td>";
  echo "<td>" . $row['Postcode'] . "</td>";
  echo "<td>" . $row['PhoneNo'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
 
}

  echo "</tr>";
  echo "</table>";
  
  


?>

<br> <br/> 

<b> This is a table of the Employee_Jobs table </b> 

<?php


$stmt = $conn->prepare("SELECT * FROM Employee_Job");
$stmt->execute();
$result = $stmt;

 echo 
    "<table border='1'>
    <tr>
    <th>EmployeeID</th>
	<th>job_id</th>
    
  
    </tr>"
    ;

    foreach($result as $row)
    {
  echo "<tr>";
  echo "<td>" . $row['EmployeeID'] . "</td>";
  echo "<td>" . $row['job_id'] . "</td>";
 
}

  echo "</tr>";
  echo "</table>";
  
  


?>









<br> <br/> 

	
					<form action='design.php' method=post>
	
     
        <tr><td><input type="submit" value="Update Data" name="B1"></td>
   	
    </form>
	


				 
					 
        </div>
</div>



					<br />
					 </p>
        </div>
</div>




<?php
include("views/footer.php");
?>
