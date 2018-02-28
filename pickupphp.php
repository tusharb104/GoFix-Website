<?php session_start();
include("link.php");

$error="";
$success="";

if(array_key_exists("submit",$_POST))
{   
	if(!$_POST["name"])
		$error.="Name is Required<br>";
	if(!$_POST["email"])
		$error.="Email is Required<br>";
  	if(!$_POST["mobile"])
		$error.="Mobile no is Required<br>";
	if(!$_POST["add1"])
		$error.="Address field 1 is Empty<br>";
	if(!$_POST["add2"])
		$error.="Address field 2 is Empty<br>";
	if(!$_POST["zip"])
		$error.="Zip code  is Empty<br>";
	if(!$_POST["state"])
		$error.="State name is Required<br>";
	if(!$_POST["city"])
		$error.="City name is Required<br>";
	if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== false) 
		$error.="Email is not a valid email address<br>";
    
    if($error!="")
		$error="<div class='alert alert-danger' role='alert'>".$error."</div>";
	else
	{	
		
		
				
		$query="INSERT INTO pickup(name,email,mobile,add1,add2,city,state,zip) values('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['email'])."',".mysqli_real_escape_string($link,$_POST['mobile']).",'".mysqli_real_escape_string($link,$_POST['add1'])."','".mysqli_real_escape_string($link,$_POST['add2'])."','".mysqli_real_escape_string($link,$_POST['city'])."','".mysqli_real_escape_string($link,$_POST['state'])."','".mysqli_real_escape_string($link,$_POST['zip'])."')";
		if(mysqli_query($link,$query))
		{
			header("Location: pickup2.php");
		}
					
				else
					$error.="could not sign in .";
		
		if($error!="")
			$error="<div class='alert alert-danger' role='alert'>".$error."</div>";
			
		else{
				$success="<div class='alert alert-success' role='alert'>".$success."</div>";
				$error.=$success;
			}
	}
}

?>