<?php
include("views/header.php");
?>

<div class="maincontent">
		<div class="content">
	<div class="Register">
		<div class="Register-screen">
			<div class="app-title">
				<h1>Register</h1>
			</div>

			<div class="Register-form">
				<form action="register.php" method="post">
					
				<div class="control-group">
				<input type="text" class="Register-field" name="UserName" value="" placeholder="Username" id="UserName">
				<label class="Register-field-icon fui-user" for="Register-name"></label>
				
				</div>
				<div class="control-group">
				<input type="password" class="Register-field" name="Password" value="" placeholder="Password" id="Password">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
                                
                <div class="control-group">
				<input type="password" class="Register-field" name="PasswordConf" value="" placeholder="Password Confirmation" id="PasswordConf">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
                                
                <div class="control-group">
				<input type="text" class="Register-field" name="Email" value="" placeholder="Email" id="Email">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
				
				<div class="control-group">
				<input type="text" class="Register-field" name="Name" value="" placeholder="Name" id="Name">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
				 				 
				<div class="control-group">
				<input type="text" class="Register-field" name="Street" value="" placeholder="Street" id="Street">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
				
				<div class="control-group">
				<input type="text" class="Register-field" name="City" value="" placeholder="City" id="City">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
				
				<div class="control-group">
				<input type="text" class="Register-field" name="County" value="" placeholder="County" id="Country">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
				
				<div class="control-group">
				<input type="text" class="Register-field" name="Postcode" value="" placeholder="Postcode" id="Postcode">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
				
				<div class="control-group">
				<input type="text" class="Register-field" name="PhoneNo" value="" placeholder="PhoneNo" id="PhoneNo">
				<label class="Register-field-icon fui-lock" for="login-pass"></label>
				</div>
				
			
				<input type="submit" name="Register" value="Register" class="login-link">
<!--				<a class="btn btn-primary btn-large btn-block" href="#">Register</a>-->
				
				
				</form>
				<?php
				include("addemployee.php");
				?>
			</div>
		</div>
	</div>
        </div>
</div>

<?php
include("views/footer.php");
?>
