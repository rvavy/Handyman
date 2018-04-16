<?php
include("views/header.php");
?>
<div class="maincontent">
		<div class="content">
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Admin/Employee Login</h1>
			</div>

			<div class="login-form">
				<form action="login.php" method="post">
					<label for="username">Username:</label>
					<input type="text" id="username" name="username">
					<label for="password" >Password:</label>
					<input type="password" id="password" name="password">
						<input type="submit" name="login" value="Login">
				</form>
				        <?php
						// the Process for login form to work. 
					include("login_process.php");
					include("login_process_admin.php");
					?>

				
			</div>
		</div>
	</div>
        </div>
</div>

		
			</div>
		</div>
	</div>
        </div>
</div>


<?php
include("views/footer.php");
?>
