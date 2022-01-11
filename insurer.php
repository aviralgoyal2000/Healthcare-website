<!--Contributed by Pratyaksha, 19BCI0136-->
<!DOCTYPE html>
<html>
	<head>
		<title>ABC | Insurer</title>
		<link rel="stylesheet" href="insu.css">
		<script>
			function validateForm() 
			{
				let a = document.forms["ins"]["uname"].value;
				if(a == "")
				{
					alert("Username must be entered");
					return false;
				}

				let x = document.forms["ins"]["email"].value;
				if (x == "") 
				{
					alert("Email must be filled out");
					return false;
				}
				
				let y = document.forms["ins"]["psw"].value;
				if (y == "") 
				{
					alert("Password must be filled out");
					return false;
				}

				let z = document.forms["ins"]["psw-repeat"].value;
				if (z == "") 
				{
					alert("Repeat password not filled");
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
				$p1=$_POST["uname"];
				$p2=$_POST["email"];
				$p3=$_POST["psw"];
				$p4=$_POST["psw-repeat"];
				
				session_start();
				$_SESSION['p1']=$p1;
				$_SESSION['p2']=$p2;
				$_SESSION['p3']=$p3;
				$_SESSION['p4']=$p4;
				//include('example.php');
				header('Location:a4.php');
			}
		?>

		<header id="header1">ABC</header>
		<form  name="ins" style="border:1px solid #ccc" onsubmit="return validateForm()" action="insurer.php" method="post">
			<div class="container">
				<h1 align="center">Sign Up</h1>
				<p align="center">Please fill in this form to create an account.</p>
				<br>
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname">
				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email">
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw">
				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat">
				<label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
				</label>
				
				<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

				<div class="clearfix">
					<input type="submit" class="registerbtn" name="submit" value="Sign Up">
				</div>
			</div>
		</form>
		
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-lg-left text-center">
						<div class="copyright">
							&copy; Copyright 2020 <strong>ABC</strong>. All Rights Reserved
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
		<h3>Contributed by Pratyaksha, 19BCI0136</h3>
	</body>
</html>