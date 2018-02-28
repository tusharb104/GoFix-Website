<?php include("navbar.php"); ?>
<?php include("head.php"); ?>
<?php include("pickupphp.php");?>


<div class="progress" style="margin-top: 100px;margin-left: 20px;margin-right: 20px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: 33.33%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="container" style="margin-top: 100px; width: 900px;">
<form method="post">
	<?php echo $error;?>

  <div class="form-row">
    <div class="form-group col-md-4">
      
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name">
    </div>
    <div class="form-group col-md-4">
      
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-4">
      
      <input type="tel" class="form-control" id="inputPassword4" placeholder="Contact-No" name="mobile">
    </div>
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="add1">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="add2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
     
      <input type="text" class="form-control" id="inputCity" placeholder="City" name="city">
    </div>
    <div class="form-group col-md-4">
      
      <select id="inputState" class="form-control"  placeholder="State" name="state">
      	<option>Rajasthan</option>
      	<option>Maharastra</option>
      	<option>Uttar Pradesh</option>
      	<option>Karnataka</option>
      	<option>Rajasthan</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      
      <input type="text" class="form-control" id="inputZip" placeholder="Zip" name="zip">
    </div>
  </div>
  
  <button type="submit" class="button " style="align-content: center; width: 200px;" name="submit"><span>Book Now</span></button>
</form>
</div>




<?php include("footer.php");?>
<?php include("foot.php");?>