<?php
include("config/connect.inc.php");
include("views/header.php");
?>

            <div>
			
            </div>
        </div>
</div>
 
<div class="maincontent">

		<div class="content">
  <center><h1> Welcome to the HandyMan Website!</h1></center>
  
  
 <br> </br> 
 <br> </br> 
 <br> </br> 
 
 <b>Welcome to Handyman, this website was set up by a local business man to offer specific jobs for students who become employees to work for the agency and complete a wide range of different area of work for the companies clients. Please create an account navigate throughout our website!</b>

 <br> </br> 
 
  <br> </br> 
  
   <br> </br> 
   
   <b> Search for Jobs in the search box:</b>
 
<form action="index.php" method="get">
<label for="search">Enter Job Name</label>
<input type="text" name="search" id="search">
<input type="submit" name="submit" value="Search">
</form>



<?php 
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1362360', 'u1362360', '03dec93');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

if(!isset($_GET['search']))
{ 
  echo "";
  exit;

 } 

$search_term = $_GET['search'];
echo $search_term;

$stmt = $conn->prepare("SELECT * FROM job WHERE jobname LIKE :search_term");
$stmt->bindValue(':search_term','%'.$search_term.'%');
$stmt->execute();


if($search_term=="") 

{ 

     echo "<p>Please enter a search term!</p>"; 
     exit; 
 }

while ($job = $stmt->fetch(PDO::FETCH_OBJ))
{
        echo "<p>";
        echo "<a href='job-details.php?job_id=".$job->job_id."'>";
        echo $job->jobname;
        echo "</a>";
        echo "</p>";

	
	
}

$conn=NULL;

?>

<?php
include("views/footer.php");
?>