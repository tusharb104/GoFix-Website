
<?php include("signupphp.php");  ?>


<?php include("head.php");?>
<?php include("navbar.php");?>


 <div class="container form_1">
      <div>
        <form method="post" id="form2">
        <h3> Signup!</h3>
        <?php echo $error;?>
          <div class="form-group form1in  ">
            <label for="username" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            <p id="puser" class="err"></p>
          </div>
          <div class="form-group form1in" >
            <label for="email2" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="email2" placeholder="Email" name="email">
            <p id="pemail" class="err"></p>
          </div>
          <div class="form-group form1in">
            <label for="password2" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="password2" placeholder="Password" name="password">
            <p id="ppass" class="err"></p>
          
        </div>
        
          
          <div class="form-group form1in">
            <label for="mobile" class="col-form-label">Mobile No</label>
            <input type="tel" class="form-control" id="mobile" name="no">
            <p id="pmobile" class="err"></p>
          </div>
          
          

        <div class="form-group ">
          <div class="form-check">
          <p>Gender</p>
            <span id="males">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="name" id="male" value="male"> Male
            </label>
            </span>
            <span id="females">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="name" id="female" value="female"> Female
            </label>
            </span>
          </div>
        </div>
        <div class="form-group form1">
            <span id="accepts">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="accept" value="1" id="accept">I Agree to<a href="#"> terms and conditions.</a> 
            </label>
            </span>
          </div>
          <br>
         <button type="submit" class="button " style="align-content: center; width: 200px" name="submit"><span>Signup </span></button>
      </form>
      </div>
    
   
</div>
<?php include("footer.php");?>
<?php include("foot.php");?>

