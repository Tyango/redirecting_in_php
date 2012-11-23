<?php
session_start();
if(isset($_POST["logout"]))
{
	echo "Redirected to login.php";
	header("Location:login.php");
	exit;
}
session_unset();
?>
