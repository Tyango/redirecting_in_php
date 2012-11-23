<!DOCTYPE html AUTHOR:TNC>
<html>
	<head><title>Welcome Page</title><link href="style.css" rel="stylesheet" type="text/css"/></head>
	
	<body>
		<div class ="first">
				<?php
				session_start();
				if($_SESSION["index"]==1)
				echo "Welcome".$_SESSION["username"]."<br/><p><h3><strong>Refreshing the page will redirect to login.php.</strong></h3></p>";
				//session_destroy();
				else
				{
					header("Location:login.php");
					exit;
					session_destroy();
				}
				?>
		</div>
		
		<div class ="main">
				<?php
					
					//session_start();
					echo "<p><h1><strong>Status : Logged in.</strong></h1></p>";
					//echo "<p></p>";
					echo  "-------------------------------------------------------------------------------------------------";
					echo "<p>";
					echo "Email    :".$_SESSION["email"]."";
					echo "</p>";
					echo "<p>Username :".$_SESSION["username"]."</p>";
					session_destroy();
				?>
		<form method="post" action ="logout.php">
			<input type = "submit" id="logout" value ="logout" name ="logout"/>
		</form>
		</div>
		<div class="footer">
			<p><strong>All Rights Reserved, Copyright &copy; 2012, TNC</strong></p>
		</div>
	
	</body>
</html>
