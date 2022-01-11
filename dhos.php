<!--Contributed by MANISH CHEMBETI - 19BCE2430-->
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
      }
    </script> 
  </head>
  
  <body>
  <?php

  if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
  {
    $p1=$_POST["hosp_name"];

    session_start();
    $_SESSION['p1']=$p1;
    //include('example.php');
    header('Location:d1.php');
 }

?>
    <header id="header1">ABC</header>
    <div id="container-main">
      <form name="hos" onsubmit="return validateForm()" method="post" action="dhos.php">
        <div class="container">
          <h2 align="center">Hospital Deletion Form</h2>
          <p align="center">Please fill in this form to delete your hospital account</p>
          <hr>
          <b>Hospital name</b><span class="req"> * </span>
          <input type="text" placeholder="Enter Hospital name" name="hosp_name" id="hosp_name">
          <input type="submit" class="registerbtn" name="submit" value="Delete">
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
    <h3>Contributed by MANISH CHEMBETI - 19BCE2430</h3>
  </body>
</html>