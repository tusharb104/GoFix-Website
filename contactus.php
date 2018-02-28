
<?php include("feed.php");?>
<?php include("navbar.php");?>
<?php include("head.php");?>


<div class="contactus">
	<div class="row">
		<div class="col-md-4 con">
			<h1 style="margin-bottom: 25px;">Contact Us</h1>
			<p class="paraconta">GoFix Pvt Ltd</p>
			<p class="paraconta">S-625 BH-3 The LNMIIT</p>
			<p class="paraconta">Rupa ki Nangal</p>
			<p class="paraconta">Post sumel via jamdoli,Jaipur</p>
			<p class="paraconta"> Pin: 302031</p> 
			<p class="paraconta"> Mobile No: 8769016400</p> 
			
		</div>
		<div class="col-md-6 con" style="margin-left:100px height:400px;">

		<h1 style="margin-bottom: 25px;">Feedback|Question</h1>
		<form method="post" id="form3">
			<?php echo $error; ?>
  			<div class="form-row">
    			<div class="form-group col-md-6">
      				<input type="email" class="form-control" id="email3" placeholder="Email" name="email">
    			</div>
    			<div class="form-group col-md-6">
      				<input type="text" class="form-control" id="name3" placeholder="Name" name="name">
    			</div>
  			</div>
  			<div class="form-group fluid">
    			<textarea cols="10" class="form-control" id="message3" placeholder="Message" name="message"></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>	
			
		</div>
		
	</div>
</div>
<?php include("footer.php");?>
<?php include("foot.php");?>

