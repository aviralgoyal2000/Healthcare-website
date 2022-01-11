<!--Contributed by Pratyaksha, 19BCI0136-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="hos.css">
    <title>ABC | Hospital</title>
    <script>
      function validateForm()
      {
        let x = document.forms["hos"]["hosp_name"].value;
        var regex = /^[a-zA-Z]+$/;
        if (x == "")
        {
          alert("Hospital name must be filled out");
          return false;
        }
        else if (regex.test(x) == false) 
        {
          alert("Hospital Name must be in alphabets only");
          letters.yourname.focus();
          return false;
        }
        
        let y = document.forms["hos"]["location"].value;
        if (y == "")
        {
          alert("Location must be specified");
          return false;
        }
        
        let z = document.forms["hos"]["select_spl"].value;
        if (z == "") 
        {
          alert("Specialization must be selected");
          return false;
        }
      }
    </script> 
  </head>
  
  <body>
  <?php
  
  $Mes_User1=$Mes_User2="";

  if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
  {
    $p1=$_POST["hosp_name"];
    $p2=$_POST["location"];
    
    session_start();
    $_SESSION['p1']=$p1;
    $_SESSION['p2']=$p2;
    //include('example.php');
    header('Location:sample2.php');
 }

?>
    <header id="header1">ABC</header>
    <div id="container-main">
      <form name="hos" onsubmit="return validateForm()" method="post" action="sample.php">
        <div class="container">
          <h2 align="center">Hospital Registeration Form</h2>
          <p align="center">Please fill in this form to create an account for your Hospital.</p>
          <hr>
          <b>Hospital name</b>
          <input type="text" placeholder="Enter Hospital name" name="hosp_name" id="hosp_name"> <span class="req"> *<?php echo $Mes_User1 ?></span>
          <b>Hospital Location</b>
          <input type="text" placeholder="Location" name="location" id="hosp_loc"><span class="req"> *<?php echo $Mes_User2 ?></span>
          <button onclick="getLocation()">get location</button>
          <br><br>
          <b>Hospital Specialization</b>
          <select id="specializations" name="select_spl">
            <option value="" disabled selected>Choose a specialization</option>
            <option value="Multi Speciality">Multi Speciality</option>
            <option value="Eyes">Eyes</option>
            <option value="Cancer">Cancer</option>
            <option value="Cardio">Cardio</option>
          </select>
          <br><br><br>
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <input type="submit" class="registerbtn" name="submit" value="Register">
        </div>
      </form>
    </div>
    
    <footer id="footer">
      <div class="col-lg-6">
        <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
          <a href="#intro" class="scrollto">Home</a>
          <a href="#about" class="scrollto">About</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Use</a>
        </nav>
      </div>
    </footer>
    <h3>Contributed by Pratyaksha, 19BCI0136</h3>
  </body>
</html>