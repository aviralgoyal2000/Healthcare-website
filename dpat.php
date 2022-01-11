<!--Contributed by Aviral Goyal, 19BCE0883-->
<!DOCTYPE html>
<html>
    <head>
        <title>ABC | Patient</title>
        <link rel="stylesheet" href="pat.css">
        <script>
			function validateForm() 
			{
				let x = document.forms["pat"]["name"].value;
				if (x == "") 
				{
					alert("Name must be filled out");
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
                $p1=$_POST["name"];

                session_start();
                $_SESSION['p1']=$p1;
                
                //include('example.php');
                header('Location:d3.php');
            }
        ?>

        <header id="header1">ABC</header>
        <h2 align="center">Patient Deletion Form</h2>
        <p align="center">Delete patient information</p>
        <div class="container">
            <form name="pat" onsubmit="return validateForm()" action="dpat.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Patient Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" id ="pat_name" placeholder="Enter Name">
                    </div>
                </div>

                <br>
                <div class="row">
                    <input type="submit" class="registerbtn" name="submit" value="Delete">
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