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
		
		
				
		$error.= $query="INSERT INTO pickup(name,email,mobile,add1,add2,city,state,zip) values('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['email'])."',".mysqli_real_escape_string($link,$_POST['mobile']).",'".mysqli_real_escape_string($link,$_POST['add1'])."','".mysqli_real_escape_string($link,$_POST['add2'])."','".mysqli_real_escape_string($link,$_POST['city'])."','".mysqli_real_escape_string($link,$_POST['state'])."','".mysqli_real_escape_string($link,$_POST['zip'])."')";
		if(mysqli_query($link,$query))
		{
			header("Location: project.php");
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


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}
body {
  background-color: #f1f1f1;
}
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 50%;
  min-width: 300px;
}
h1 {
  text-align: center;  
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}
button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
button:hover {
  opacity: 0.8;
}
#prevBtn {
  background-color: #bbbbbb;
}
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.step.active {
  opacity: 1;
}
/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
<?php  echo $error; ?>
<form id="regForm" method="post" >
  
  <h1>Register:</h1>
 
  <div class="tab">
    <p><input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name"></p>
    
  </div>
  <div class="tab">
    <p><input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"></p>
    <p>      <input type="tel" class="form-control" id="inputPassword4" placeholder="Contact-No" name="mobile"></p>
  </div>
  <div class="tab">
    <p> <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="add1"></p>
    <p> <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="add2"></p>
    
  </div>
  <div class="tab">Login Info:
    <p><input type="text" class="form-control" id="inputCity" placeholder="City" name="city"></p>
    <p><select id="inputState" class="form-control"  placeholder="State" name="state">
      	<option>Rajasthan</option>
      	<option>Maharastra</option>
      	<option>Uttar Pradesh</option>
      	<option>Karnataka</option>
      	<option>Rajasthan</option>
      </select></p>
      <input type="text" class="form-control" id="inputZip" placeholder="Zip" name="zip">
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button class="tt" type="button" id="nextBtn"  name="submit" onclick="nextPrev(1) ">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {

    
   		document.getElementById("nextBtn").innerHTML = "Submit";
      var cr =document.getElementsByClassName("tt");
        if (cr.type === "button") 
        cr.type = "submit";
  
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  
  x[n].className += " active";
}
</script>

</body>
</html>
