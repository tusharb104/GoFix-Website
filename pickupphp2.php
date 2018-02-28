<?php session_start();
include("link.php");

$error="";
$success="";

if(array_key_exists("submit",$_POST))
{   
	if(!$_POST["company"])
		$error.="Company NameRequired<br>";
	if(!$_POST["model"])
		$error.="Model no is Required<br>";
  	if(!$_POST["issue"])
		$error.="Please mention the problem with your gadget <br>";
	
    if($error!="")
		$error="<div class='alert alert-danger' role='alert'>".$error."</div>";
	else
	{	
		$query="INSERT INTO pickup(name,email,mobile,add1,add2,city,state,zip) values('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['email'])."',".mysqli_real_escape_string($link,$_POST['mobile']).",'".mysqli_real_escape_string($link,$_POST['add1'])."','".mysqli_real_escape_string($link,$_POST['add2'])."','".mysqli_real_escape_string($link,$_POST['city'])."','".mysqli_real_escape_string($link,$_POST['state'])."','".mysqli_real_escape_string($link,$_POST['zip'])."')";
		if(mysqli_query($link,$query))
		{
			header("Location: pickup3.php");
		}
					
				else
					$error.="could not submit .";
		
		if($error!="")
			$error="<div class='alert alert-danger' role='alert'>".$error."</div>";
			
		else{
				$success="<div class='alert alert-success' role='alert'>".$success."</div>";
				$error.=$success;
			}
	}
}

?>