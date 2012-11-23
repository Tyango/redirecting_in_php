<!DOCTYPE php AUTHOR:TNC>
<html>
	<head><title>Login Page</title><link href="style.css" rel="stylesheet" type="text/css"/></head>
	
	<body>
		<div class="first">
			Please sign in first.<h3>Note: Invalid email entry and empty email entry will redirect to login.php. Other fields may left empty.</h3>
			<?php
			echo "<h1><strong>STATUS: LOGOUT.</strong><h1>";
			session_start();
			$_SESSION["email"] = "";
			$_SESSION["username"]="";
			$_SESSION["index"]=0;
			//header("Location:welcome.php");
			//exit;
			?>
		</div>
		
		<div class="main">
			<form method="post" action ="action.php">
			<label>Email</label><input type="text" id="email" name="email"/><br/>
			<label>Username</label><input type="text" id="username" name="username"  /><br/>
			<label>Password</label><input type="password" id="password" name="password"/><br/>
			<label>Confirm Password</label><input type="password" id="c_password" name="cpass"/><br/>
			<input type="submit" value="Signup Now" name="submit" />
		</form>
	
		</div>
		
		<div class="footer">
			<p><strong>All Rights Reserved, Copyright &copy; 2012, TNC</strong></p>
		</div>
	</body>
</html>
