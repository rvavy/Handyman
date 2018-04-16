<?php
include("views/header.php");
include ("config/connect.inc.php");
?>

<div class="maincontent">
		<div class="content">
            	<header>
                	<h2>What the Handyman Website is all about!</h2>
                </header>
                    <p>Below is a list of all the different clients which belong to the handyman agency<br />
					<br />
					 </p>
					 
					 
					 <br> </br>
<form action='clients.php' method=post>
	
     
        <tr><td><input type="submit" value="Update Clients" name="B1"></td>
   	
    </form>
	
	<br> </br> 
					 
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


					 
					 
        </div>
</div>


<?php



include("views/footer.php");
?>