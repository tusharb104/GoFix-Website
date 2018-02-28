<?php
session_start();

include("link.php");

if(array_key_exists("submit",$_POST))
{
   

    $query="select * from users where email='".mysqli_real_escape_string($link,$_POST['email'])."'";
          $result=mysqli_query($link,$query);
          $row=mysqli_fetch_array($result);
          if(isset($row))
          { 
            if($row['password']==$_POST['password'])
            {
              
              
              header("Location: pp.php");

            }
            else
              echo "The email/password is invalid!";


          }

          else 
            echo "The email/password is invalid!";   

}     

    


?>





<?php include("head.php"); ?>
<
  <body data-spy="scroll" data-target="#navbar-example">

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">GoFix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="project.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pickup.php">Request a Repair</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ourteam.php">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Job  Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Download Our App</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" id="form1">
      <input class="form-control mr-sm-2" type="email" placeholder="Email" name="email" id="email">
      <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password" id="password">
      <button class="button login" type="submit" name="submit"><span>Login </span></button>
    </form>
  </div>
</nav>

<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<?php include("jumbo2.php");?>


<div class=" card1 container">
<div class="card-deck">
  <div class="card border-white  style_1">
    <img class="card-img-top vector1" src="map.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Easy Pickup</h4>
      <p class="card-text">Get your device picked up on one tap. When its repaired we will deliver it to your location.</p>
      
    </div>
  </div>
  <div class="card border-white style_1">
    <img class="card-img-top vector1" src="low.jpg." alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Low Cost</h4>
      <p class="card-text">We repair your device at the lowest rates. Get exciting offers on our app.</p>
      
    </div>
  </div>
  <div class="card border-white style_1">
    <img class="card-img-top vector1" src="ins.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Get Insurance</h4>
      <p class="card-text">Get your device insurance, waterproof  starting at 2000 per month, and get amazing accessories free.</p>
     
    </div>
  </div>
</div>
</div>


<?php include("footer.php"); ?>
 
   
    
<?php include("foot.php");?>