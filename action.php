<!DOCTYPE php PURPOSE:SIMPLE VALIDATION checks email validation only...>
<--fjdhf/>
<?php

if(isset($_POST["submit"]))
{
	session_start();
	$_SESSION["email"] =$_POST["email"];
	$_SESSION["username"]=$_POST["username"];
	$_SESSION["password"]=$_POST["password"];
	//$validEmail ="/^[_A-Za-z0-9-]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,4})$";
	//$_SESSION["index"] =0;
	//if(preg_match("/^[_A-Za-z0-9-]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,4})$",$_SESSION["email"]))
	if (filter_var($_SESSION["email"], FILTER_VALIDATE_EMAIL)) {
    //valid
    $_SESSION["index"]=1;
	}
	else
	$_SESSION["index"]=0;
	
	
	//if valid redirecting to welcome.php
	if($_SESSION["index"]==1){
		header("Location:welcome.php");
		exit;
	}
	
	//if invalid redirecting to login.php
	if($_SESSION["index"]==0)
	{
		header("Location:login.php");
		exit;
	}
	session_destroy();
}



?>

