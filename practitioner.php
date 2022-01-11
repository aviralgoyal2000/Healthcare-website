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
				
				let y = document.forms["pract"]["spl"].value;
				if (y == "") 
				{
					alert("Specializtion must be filled out");
					return false;
				}

				let z = document.forms["pract"]["workingHospId"].value;
				if (z == "") 
				{
					alert("Working Hopital ID must be filled out");
					return false;
				}

				let a = document.forms["pract"]["proof"].value;
				if (a == "") 
				{
					alert("Working proof ID must be filled out");
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
				$p2=$_POST["spl"];
				$p3=$_POST["dept"];
				$p4=$_POST["workingHospId"];
				$p5=$_POST["proof"];
				
				session_start();
				$_SESSION['p1']=$p1;
				$_SESSION['p2']=$p2;
				$_SESSION['p3']=$p3;
				$_SESSION['p4']=$p4;
				$_SESSION['p5']=$p5;
				//include('example.php');
				header('Location:a2.php');
			}
		?>

		<header id="header1">ABC</header>
		
		<h2 align="center">Practitioner Registration Form</h2>
		<p align="center">Register as a practitioner</p>
		
		<div class="container">
			<form name="pract" action="practitioner.php" method="post" onsubmit="return validateForm()">
				<div class="row">
					<div class="col-25">
						<label for="fname">Practitioner Name</label>
					</div>
					<div class="col-75">
						<input type="text" id="fname" name="name" placeholder="Enter Name">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="spl">Specialization</label>
					</div>
					<div class="col-75">
						<input type="text" id="lname" name="spl" placeholder="Enter Degree/Specialization">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="dept">Department</label>
					</div>
					<div class="col-75">
						<select id="department" name="dept">
                            <option value="" disabled selected>Choose department</option>
							<option value="Ortho">Ortho</option>
							<option value="Cardio">Cardio</option>
							<option value="Neuro">Neuro</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="workingHospId">Working Hospital ID</label>
					</div>
					<div class="col-75">
						<input type="text" id="workingId" name="workingHospId" placeholder="Enter Organization Unique ID">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="proof">Working proof ID</label>
					</div>
					<div class="col-75">
						<input type="text" id="proof" name="proof" placeholder="Enter Working ID Number">
					</div>
				</div>
				<br>
				<div class="row">
					<input type="submit" class="registerbtn" name="submit" value="Register">
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