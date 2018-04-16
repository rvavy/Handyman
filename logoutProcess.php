<?php
include("config/sessionstart.inc.php");

$_SESSION=array();
session_destroy();
header("Location: index.php");
?>