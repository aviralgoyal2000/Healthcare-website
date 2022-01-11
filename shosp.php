<!--Contributed by Pratyaksha, 19BCI0136-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="hos.css">
    <title>ABC | Hospital</title>
  </head>
  
  <body>
    <?php
    
      $Mes_User1=$Mes_User2=$Mes_User3="";
      
      if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
      {
        $p1=$_POST["hosp_name"];
        $p2=$_POST["location"];
        $p3=$_POST["select_spl"];
        
        session_start();
        $_SESSION['p1']=$p1;
        $_SESSION['p2']=$p2;
        $_SESSION['p3']=$p3;
        //include('example.php');
        header('Location:s1.php');
      }
    ?>

    <header id="header1">ABC</header>
    <div id="container-main">
      <form name="hos" method="post" action="shosp.php">
        <div class="container">
          <h2 align="center">Hospital Search Form</h2>
          <p align="center">Please fill only one field to find the hospital</p>
          <hr>
          <b>Hospital name</b>
          <input type="text" placeholder="Enter Hospital name" name="hosp_name" id="hosp_name">
          <b>Hospital Location</b>
          <input type="text" placeholder="Location" name="location" id="hosp_loc">
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
          <input type="submit" class="registerbtn" name="submit" value="Search">
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