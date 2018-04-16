<?php

?>
<html lang="en">

<head>
	<link rel="stylesheet" href="css/main.css" type="text/css" />

	<title>The Handyman</title>
</head>

<body>
	
<header>
	<nav id="primary-navbar">

		<div class="box">
  			<div class="container-1">
			<form action="results.php" method="post">
      			<input type="search" id="search" name="search" placeholder="Search..."/>
				<input type="submit" id="submit" value="Submit" name="button">
				<?php
				//include("search.inc.php");
				?>
			</form>
  			</div>
		</div>

		<ul>
		<li>
			</li>
			<li><p><?php
			if(isset($_SESSION['username'])){
				echo"Logged in as: ".$_SESSION['username'];
			}
			?></p></li>
			<li><a href="register.php">Register</a></li>
			<?php
			if(!isset($_SESSION['username'])){
				echo"<li><a href='login.php'>Login</a></li>";
			}
			?>
			<li><a href="logoutProcess.php">Log out</a></li>
		</ul>
    </nav>

	<nav id="navbar">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="aboutus.php">ABOUT</a></li>
			<li><a href="contact_us.php">CONTACT US</a></li>
			<li><a class="logo" href="index.php"></a></li>
            <li><a href="clients.php">CLIENTS</a></li>
			<li><a href="jobs.php">JOBS</a></li>
			
		</ul>
	</nav>

	<div class="logo"></div>
</header>