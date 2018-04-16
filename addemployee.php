<?PHP
if(isset($_POST['Register'])){

include("config/sessionstart.inc.php");
include("config/connect.inc.php");
	
	//Validate $FirstName
if(empty($_POST['Name']))
    {
        echo "Missing Values";
         return false;
}
	
	//Validate $SecondName
if(empty($_POST['UserName']))
    {
        echo "Missing Values";
         return false;
    }
	 
	//Validate $CustomerEmail
if(empty($_POST['Street']))
    {
      echo "Missing Values";
        return false; 
	}
	
		//Validate $CustomerEmail
if(empty($_POST['Email']))
    {
      echo "Missing Values";
        return false; 
	}
	
$Email = $_POST['Email'];

if (filter_var($Email, FILTER_VALIDATE_EMAIL) == false)
 {	  
		echo "Invalid Email Address";
          return false; 
	}
    
	//validate $CustomerMobile
if(empty($_POST['PhoneNo']))
    {
        echo "Missing Values";
        return false;
    }
	
	//validate $Quantity
if(empty($_POST['County']))
    {
        echo "Missing Values";
        return false;
    }
	
//Validate $FirstName
if(empty($_POST['Postcode']))
    {
        echo "Missing Values";
         return false;
}

//Validate $FirstName
if(empty($_POST['Password']))
    {
        echo "Missing Values";
         return false;
}

//Validate $FirstName
if(empty($_POST['PasswordConf']))
    {
        echo "Missing Values";
         return false;
}

//Validate $FirstName
if($_POST['Password'] != $_POST['PasswordConf'])
    {
        echo "Passwords don't match";
         return false;
}	

	if(!ctype_digit($_POST['PhoneNo']))
	{
	    echo "Invalid phone number";
		return false;
	}
	
	if (StrLen($_POST['PhoneNo']) !== 11) 
		{
			
			echo "Invalid phone number";
			return false;
			}
			
$Name =$_POST["Name"];
$UserName =$_POST["UserName"];
$Password =$_POST["Password"];
$Street =$_POST["Street"];
$City =$_POST["City"];
$County =$_POST["County"];
$Postcode =$_POST["Postcode"];
$PhoneNo =$_POST["PhoneNo"];
$Email =$_POST["Email"];

$stmt = $conn->prepare("INSERT INTO Employee (UserName, Name, Street, City, County, Postcode, Password, PhoneNo, Email)
    VALUES ('$UserName', '$Name', '$Street', '$City', '$County', '$Postcode','$Password', '$PhoneNo', '$Email')");

$stmt->execute();

		  
		header('Location:index.php');
}
		
?>