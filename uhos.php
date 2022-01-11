<!--Contributed by Aviral Goyal, 19BCE0883-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="hos.css">
    <title>ABC | Hospital</title>
    <script>
      function validateForm()
      {
        let x = document.forms["hos"]["ohosp_name"].value;
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
        
        let y = document.forms["hos"]["olocation"].value;
        if (y == "")
        {
          alert("Location must be specified");
          return false;
        }
        
        let z = document.forms["hos"]["oselect_spl"].value;
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

  if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
  {
    $p1=$_POST["ohosp_name"];
    $p2=$_POST["olocation"];
    $p3=$_POST["oselect_spl"];
    $p4=$_POST["nhosp_name"];
    $p5=$_POST["nlocation"];
    $p6=$_POST["nselect_spl"];

    session_start();
    $_SESSION['p1']=$p1;
    $_SESSION['p2']=$p2;
    $_SESSION['p3']=$p3;
    $_SESSION['p4']=$p4;
    $_SESSION['p5']=$p5;
    $_SESSION['p6']=$p6;
    //include('example.php');
    header('Location:u1.php');
 }
 ?>
    <header id="header1">ABC</header>
    <div id="container-main">
      <form name="hos" onsubmit="return validateForm()" method="post" action="uhos.php">
        <div class="container">
          <h2 align="center">Update Hospital Information Form</h2>
          <p align="center">Please fill in this form to update the account of your Hospital.</p>
          <hr>
          <b>Old Hospital name</b><span class="req"> * </span>
          <input type="text" placeholder="Enter Old Hospital name" name="ohosp_name" id="ohosp_name">
          <b>New Hospital name</b>
          <input type="text" placeholder="Enter New Hospital name" name="nhosp_name" id="nhosp_name">
          <b>Old Hospital Location</b><span class="req"> * </span>
          <input type="text" placeholder="Old Location" name="olocation" id="ohosp_loc">
          <b>New Hospital Location</b>
          <input type="text" placeholder="New Location" name="nlocation" id="nhosp_loc">
          <br><br>
          <b>Old Hospital Specialization</b><span class="req"> * </span>
          <select id="specializations" name="oselect_spl">
            <option value="" disabled selected>Chosen specialization</option>
            <option value="Multi Speciality">Multi Speciality</option>
            <option value="Eyes">Eyes</option>
            <option value="Cancer">Cancer</option>
            <option value="Cardio">Cardio</option>
          </select>
          <b>New Hospital Specialization</b>
          <select id="specializations" name="nselect_spl">
            <option value="" disabled selected>New specialization</option>
            <option value="Multi Speciality">Multi Speciality</option>
            <option value="Eyes">Eyes</option>
            <option value="Cancer">Cancer</option>
            <option value="Cardio">Cardio</option>
          </select>
          <br><br><br>
          <input type="submit" class="registerbtn" name="submit" value="Update">
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
    <h3>Contributed by Aviral Goyal, 19BCE0883</h3>
  </body>
</html>