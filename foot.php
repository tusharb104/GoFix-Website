
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>

    <script type="text/javascript">
      $("#form1").submit(function(e){
        e.preventDefault();

        var error="";
        var c=0;
        
        if($("#email").val()=="")
          {
            $('#email').css('border-color', 'red');
             
             c=1;
          }
        if($("#password").val()=="")
          {
            $('#password').css('border-color', 'red');
             
             c=1;
          }

        

          if(c!=1)
          {$("#form1").unbind('submit').submit();}
    });



      $("#form2").submit(function(e){
        e.preventDefault();

        var error="";
         c=0;
        if($("#username").val()=="")
          {
            $('#username').css('border-color', 'red');
            $('#puser').html("Username is required");
            c=1;

          }
        if($("#email2").val()=="")
          {
            $('#email2').css('border-color', 'red');
             $('#pemail').html("Email is required");
             c=1;
          }
        if($("#password2").val()=="")
          {
            $('#password2').css('border-color', 'red');
             $('#ppass').html("Password is required");
             c=1;
          }

        if($("#mobile").val()=="")
          {
            $('#mobile').css('border-color', 'red');
             $('#pmobile').html("Mobile No is required");
             c=1;
          }
        if(!jQuery("input[id=male]:checked").val()&&!jQuery("input[id=female]:checked").val())
          {
           $('#males').css('border','1px solid red');
           $('#females').css('border','1px solid red');
           c=1;
          }
       
        if(!jQuery("#accept").is(":checked"))
          {
            $('#accepts').css('border','1px solid red');
            c=1;
          }

          if(c!=1)
          {$("#form2").unbind('submit').submit();}
    });
          

      $("#form3").submit(function(e){
        e.preventDefault();

      
        var c=0;
        
        if($("#name3").val()=="")
          {
            $('#name3').css('border-color', 'red');
             
             c=1;
          }
        if($("#email3").val()=="")
          {
            $('#email3').css('border-color', 'red');
             
             c=1;
          }
          if($("#message3").val()=="")
          {
            $('#message3').css('border-color', 'red');
             
             c=1;
          }

        

          if(c!=1)
          {$("#form3").unbind('submit').submit();}
    });

     



     var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
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
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
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
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}



    </script>

  </body>

</html>
