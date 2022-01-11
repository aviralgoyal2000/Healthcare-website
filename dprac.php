<!--Contributed by Aviral Goyal, 19BCE0883-->
<!DOCTYPE html>
<html>
	<head>
		<title> ABC | Practitioner </title>
		<link rel="stylesheet" href="pract.css">
		<script>
			function validateForm() 
			{
				let x = document.forms["pract"]["fname"].value;
				var regex1 = /^[a-zA-Z]+$/;
				if (x == "") 
				{
					alert("Name must be filled out");
					return false;
				}
				else if (regex1.test(x) == false) 
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
			$Mes_User1=$Mes_User2=$Mes_User3="";
			
			if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"]=="POST")
			{
				$p1=$_POST["name"];
				
				session_start();
				$_SESSION['p1']=$p1;
				//include('example.php');
				header('Location:d2.php');
			}
		?>

		<header id="header1">ABC</header>
		
		<h2 align="center">Practitioner Deletion Form</h2>
		<p align="center">Delete practitioner details</p>
		
		<div class="container">
			<form name="pract" action="dprac.php" method="post" onsubmit="return validateForm()">
				<div class="row">
					<div class="col-25">
						<label for="fname">Practitioner Name</label>
					</div>
					<div class="col-75">
						<input type="text" id="fname" name="name" placeholder="Enter Name">
					</div>
				</div>
				<br>
				<div class="row">
					<input type="submit" class="registerbtn" name="submit" value="Delete">
				</div>
			</form>
		</div><br>
		
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-lg-left text-center">
						<div class="copyright">
							&copy; Copyright 2021 <strong>ABC</strong>. All Rights Reserved
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