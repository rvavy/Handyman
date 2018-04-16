
<?php
include ("view_fncs.php");
showHeader("There was a problem");
showNavigation();

foreach($errorMsgs as $errorMsg)
{
	echo "<p>".$errorMsg."</p>";
}


showFooter();

?>
