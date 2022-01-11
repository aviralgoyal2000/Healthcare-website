<!--Contributed by Aviral Goyal, 19BCE0883-->
<!DOCTYPE html>
<html>
    <head>
        <title>ABC | Patient</title>
        <link rel="stylesheet" href="pat.css">
    </head>
    
    <body>
        <?php
            $Mes_User1=$Mes_User2=$Mes_User3="";
            
            if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
            {
                $p1=$_POST["name"];
                $p2=$_POST["birthday"];
                $p3=$_POST["gender"];
                $p4=$_POST["address"];
                
                session_start();
                $_SESSION['p1']=$p1;
                $_SESSION['p2']=$p2;
                $_SESSION['p3']=$p3;
                $_SESSION['p4']=$p4;
                //include('example.php');
                header('Location:s3.php');
            }
        ?>

        <header id="header1">ABC</header>
        <h2 align="center">Patient Search Form</h2>
        <p align="center">Search for a patient here filling only one field</p>
        <div class="container">
            <form name="pat" action="spat.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Patient Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" id ="pat_name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="birthday">Date of Birth</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="birthday" name="birthday">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-25">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="col-75">
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female 
                        <input type="radio" name="gender" value="Other"> Other 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-25">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-75">
                        <textarea id="address" rows="4" cols="50" name="address" placeholder="Enter Address"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" class="registerbtn" name="submit" value="Search">
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