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
$fl=1;
if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST"){
$p1=$_POST["RegNo"];
$p2=$_POST["StudName"];
if(empty($p1)){
$Mes_User1="Registration number can not be empty";
$fl=0;
}
else if(!preg_match("/^[a-zA-Z0-9]{9}$/",$p1)){
$Mes_User1="enter 9 AlphaNumeric characters only";
$fl=0;
}
else
{
echo validateForm($p1)."<br>";
//strlen,strcmp($p1,$p2),strrev,strtolower,strtoupper,strstr,stristr
//echo strstr($p1,"a");
//echo "<br>";
}
if(empty($p2)){
$Mes_User2="Name can not be empty";
$fl=0;
}
else if(!preg_match("/^[a-zA-Z]{3,}$/",$p2)){
//else if(!preg_match("/^[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)@[a-zA-Z]+(\.[a-zA-Z]+)(\.[a-zA-Z]{2,3})$/",$p2)){
//abc@vit.ac.in,abc.de@vit.ac.in,abc@gmail.com
$Mes_User2="enter correct Name";
$fl=0;
}
else
{
echo validateForm($p2);
}
if($fl==1){
include('patient.php');}
}
function validateForm($p){
$p=trim($p);
$p=htmlspecialchars($p);
$p=stripslashes($p);
return $p;
}
?>
    <header id="header1">ABC</header>
    <div id="container-main">
      <form name="hos" onsubmit="return validateForm()" action="a1.php" method="post">
        <div class="container">
          <h2 align="center">Hospital Registeration Form</h2>
          <p align="center">Please fill in this form to create an account for your Hospital.</p>
          <hr>
          <label for="hosp_name"><b>Hospital name</b></label>
          <input type="text" placeholder="Enter Hospital name" name="hosp_name" id="hosp_name"> <span class="req"> *<?php echo $Mes_User1 ?></span>
          <label for="location"><b>Hospital Location</b></label>
          <input type="text" placeholder="Location" name="location" id="hosp_loc"><span class="req"> *<?php echo $Mes_User2 ?></span>
          <button onclick="getLocation()">get location</button>
          <br><br>
          <label for="select_spl"><b>Hospital Specialization</b></label>
          <select id="specializations" name="select_spl">
            <option value="" disabled selected>Choose a specialization</option>
            <option value="Multi Speciality">Multi Speciality</option>
            <option value="Eyes">Eyes</option>
            <option value="Cancer">Cancer</option>
            <option value="Cardio">Cardio</option>
          </select>
          <br><br><br>
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn">Register</button>
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