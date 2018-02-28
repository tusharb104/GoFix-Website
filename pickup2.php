<?php include("navbar.php");?>
<?php include("head.php");?>
<?php include("pickupphp2.php");?>


<div class="progress" style="margin-top: 100px;margin-left: 20px;margin-right: 20px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: 66.66%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="container" style="margin-top: 100px; width: 900px;">
<form method="post" id="formcss">
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="company" class="col-form-label">Select Company</label>
      <select id="company" class="form-control" name="company">Choose</select>
    </div>
    <div class="form-group col-md-6">
      <label for="]model" class="col-form-label">Model Name</label>
      <input type="text" class="form-control" id="model" placeholder="S4" name="model">
    </div>
  </div>
  <div class="form-group">
    <label for="issue" class="col-form-label">Describe the issue</label>
   <textarea style="height: 100px" class="form-control" id="issue" placeholder="Touch Pad Damaged" name="issue"></textarea>
  </div>
   <div class="form-check">
      
     <label>   <input class="form-check-input" type="checkbox" style="width: 30px; margin-left: 0px;" value="1"> Is the Gadget In Warrenty </label>
  </div>
      
      <button type="submit" class="button " style="align-content: center; width: 200px" name="submit"><span>Submit</span></button>
    </div>

  
</form>
</div>





















<?php include("footer.php");?>
<?php include("foot.php");?>