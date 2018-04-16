<?php
require_once ("config.inc.php");
try{
    $conn=new PDO(DB_DATA_SOURCE, DB_USERNAME, DB_PASSWORD);
}
catch(PDOException $exception){
    echo "Can't connect to the database".$exception->getMessage();
}
?>