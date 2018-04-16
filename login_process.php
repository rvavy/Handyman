<?php
if(isset($_POST['login'])){

include("config/connect.inc.php");
include("config/sessionstart.inc.php");



$username =$_POST["username"];
$password =$_POST["password"];

$stmt = $conn->prepare("SELECT * FROM Employee WHERE Username = :username");
$stmt->bindValue(':username',$username);
$stmt->execute();

if($row = $stmt->fetch(PDO::FETCH_OBJ)){
	
if(($password)==$row->Password and $username ==$row->Username){
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	header("Location: index.php");
	//echo "Logged in as: $username";
}
else{
	echo "incorrect username or password";
}
}
}
?>