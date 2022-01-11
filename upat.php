<!--Contributed by Aviral Goyal, 19BCE0883-->
<!DOCTYPE html>
<html>
    <head>
        <title>ABC | Patient</title>
        <link rel="stylesheet" href="pat.css">
        <script>
			function validateForm() 
			{
				let x = document.forms["pat"]["oname"].value;
				if (x == "") 
				{
					alert("Name must be filled out");
					return false;
				}
				
				let y = document.forms["pat"]["obirthday"].value;
				if (y == "") 
				{
					alert("Date of Birth must be filled out");
					return false;
				}

				let z = document.forms["pat"]["ogender"].value;
				if (z == "") 
				{
					alert("Gender not selected");
					return false;
				}

				let a = document.forms["pat"]["oaddress"].value;
				if (a == "") 
				{
					alert("Address must be filled out");
					return false;
				}
			}
		</script>
    </head>
    
    <body>
        <?php
            $Mes_User1=$Mes_User2=$Mes_User3="";
            
            if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
            {
                $p1=$_POST["oname"];
                $p2=$_POST["obirthday"];
                $p3=$_POST["ogender"];
                $p4=$_POST["oaddress"];
                $p5=$_POST["nname"];
                $p6=$_POST["nbirthday"];
                $p7=$_POST["ngender"];
                $p8=$_POST["naddress"];
                
                session_start();
                $_SESSION['p1']=$p1;
                $_SESSION['p2']=$p2;
                $_SESSION['p3']=$p3;
                $_SESSION['p4']=$p4;
                $_SESSION['p5']=$p5;
                $_SESSION['p6']=$p6;
                $_SESSION['p7']=$p7;
                $_SESSION['p8']=$p8;
                //include('example.php');
                header('Location:u3.php');
            }
        ?>

        <header id="header1">ABC</header>
        <h2 align="center">Patient Updation Form</h2>
        <p align="center">Update patient information</p>
        <div class="container">
            <form name="pat" onsubmit="return validateForm()" action="upat.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Old Patient Name</label><span>*</span>
                    </div>
                    <div class="col-75">
                        <input type="text" name="oname" id ="pat_name" placeholder="Enter Old Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">New Patient Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nname" id ="pat_name" placeholder="Enter New Name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="birthday">Old Date of Birth</label><span>*</span>
                    </div>
                    <div class="col-75">
                        <input type="date" id="birthday" name="obirthday">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="birthday">New Date of Birth</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="birthday" name="nbirthday">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-25">
                        <label for="gender">Old Gender</label><span>*</span>
                    </div>
                    <div class="col-75">
                        <input type="radio" name="ogender" value="Male"> Male
                        <input type="radio" name="ogender" value="Female"> Female 
                        <input type="radio" name="ogender" value="Other"> Other 
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="gender">New Gender</label>
                    </div>
                    <div class="col-75">
                        <input type="radio" name="ngender" value="Male"> Male
                        <input type="radio" name="ngender" value="Female"> Female 
                        <input type="radio" name="ngender" value="Other"> Other 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-25">
                        <label for="address">Old Address</label><span>*</span>
                    </div>
                    <div class="col-75">
                        <textarea id="address" rows="4" cols="50" name="oaddress" placeholder="Enter Old Address"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="address">New Address</label>
                    </div>
                    <div class="col-75">
                        <textarea id="address" rows="4" cols="50" name="naddress" placeholder="Enter New Address"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" class="registerbtn" name="submit" value="Update">
                </div>
            </form>
        </div>
        <br>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-lg-left text-center">
                        <div class="copyright">
                            &copy; Copyright 2020 <strong>	ABC</strong>. All Rights Reserved
                        </div>
                        
                        <div class="credits">
                            Designed by <a href="#">Team ABC</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                            <a href="#intro" class="scrollto">Home</a>
                            <a href="#about" class="scrollto">About</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms of Use</a>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <h3>Contributed by Aviral Goyal, 19BCE0883</h3>
    </body>
</html>