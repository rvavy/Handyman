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
    </nav>

	<nav id="navbar">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="aboutus.php">ABOUT</a></li>
			<li><a href="contact_us.php">CONTACT US</a></li>
			<li><a class="logo" href="index.php"></a></li>
            <li><a href="clients.php">CLIENTS</a></li>
			<li><a href="jobs2.php">JOBS</a></li>
			<li><a href="design.php">DESIGN</a></li>
			
			
		</ul>
	</nav>

	<div class="logo"></div>
</header>