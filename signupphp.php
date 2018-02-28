<?php 

session_start();
include("link.php");

$error="";
$success="";

if(array_key_exists("submit",$_POST))
{   
	if(!$_POST["email"])
		$error.="Email is Required<br>";
  	if(!$_POST["username"])
		$error.="Username is Required<br>";
	if(!$_POST["password"])
		$error.="Password is Required<br>";
	if(!$_POST["no"])
		$error.="Mobile no is Required<br>";
	if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== false) 
		$error.="Email is not a valid email address<br>";
    
    if($error!="")
		$error="<div class='alert alert-danger' role='alert'>".$error."</div>";
	else
	{	
		$query="select id from users where email='".mysqli_real_escape_string($link,$_POST["email"])."' limit 1";
		$result=mysqli_query($link,$query);
		if(mysqli_num_rows($result)>0)
			$error.="That email is taken<br>";
		else
		{		
			 $query="INSERT INTO users(username,email,password,mobile_no,gender) values('".mysqli_real_escape_string($link,$_POST['username'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."',".mysqli_real_escape_string($link,$_POST['no']).",'".mysqli_real_escape_string($link,$_POST['name'])."')";
			 	if(mysqli_query($link,$query))
					$success.="Sign up successful<br>";
				else
					$error.="could not sign in .";
		}

		if($error!="")
			$error="<div class='alert alert-danger' role='alert'>".$error."</div>";
			
		else{
				$success="<div class='alert alert-success' role='alert'>".$success."</div>";
				$error.=$success;
			}
	}
}
?>