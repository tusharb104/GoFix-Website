<?php


$link=mysqli_connect("localhost","root","","gofix");
if(mysqli_connect_error())
{
  echo"connection error";
}
$error="";
$success="";

if(array_key_exists("submit",$_POST))
{   

    
    $query="insert into feedback(name,email,message) values('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['message'])."')";

    if(mysqli_query($link,$query))
					$success.="Feedback Sent<br>";
				else
					$error.="Unable to send Feedback";

				if($error!="")
			$error="<div class='alert alert-danger' role='alert'>".$error."</div>";
			
		else{
				$success="<div class='alert alert-success' role='alert'>".$success."</div>";
				$error.=$success;
			}
  }

   



?>
