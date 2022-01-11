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
			}
		</script>
    </head>
    <body>
		<?php
			$Mes_User1=$Mes_User2=$Mes_User3="";
			
			if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
			{
				$p1=$_POST["uname"];
				
				session_start();
				$_SESSION['p1']=$p1;
				//include('example.php');
				header('Location:d4.php');
			}
		?>

		<header id="header1">ABC</header>
		<form  name="ins" style="border:1px solid #ccc" onsubmit="return validateForm()" action="dinsu.php" method="post">
			<div class="container">
				<h1 align="center">Delete Form</h1>
				<p align="center">Please fill in this form to delete your account.</p>
				<br>
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname">

				<div>
					<input type="submit" class="registerbtn" name="submit" value="Delete">
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