<!--Contributed by Aviral Goyal, 19BCE0883-->
<!DOCTYPE html>
<html>
	<head>
		<title> ABC | Practitioner </title>
		<link rel="stylesheet" href="pract.css">
		<script>
			function validateForm() 
			{
				let x = document.forms["pract"]["oname"].value;
				var regex1 = /^[a-zA-Z]+$/;
				if (x == "") 
				{
					alert("Name must be filled out");
					return false;
				}
				else if (regex1.test(document.form["pract"]["nname"]) == false) 
				{
					alert("Hospital Name must be in alphabets only");
					letters.yourname.focus();
					return false;
				}
				
				let y = document.forms["pract"]["ospl"].value;
				if (y == "") 
				{
					alert("Specializtion must be filled out");
					return false;
				}

				let z = document.forms["pract"]["oworkingHospId"].value;
				if (z == "") 
				{
					alert("Working Hopital ID must be filled out");
					return false;
				}

				let a = document.forms["pract"]["oproof"].value;
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
				$p1=$_POST["oname"];
				$p2=$_POST["ospl"];
				$p3=$_POST["odept"];
				$p4=$_POST["oworkingHospId"];
				$p5=$_POST["oproof"];
                $p6=$_POST["nname"];
				$p7=$_POST["nspl"];
				$p8=$_POST["ndept"];
				$p9=$_POST["nworkingHospId"];
				$p10=$_POST["nproof"];
				
				session_start();
				$_SESSION['p1']=$p1;
				$_SESSION['p2']=$p2;
				$_SESSION['p3']=$p3;
				$_SESSION['p4']=$p4;
				$_SESSION['p5']=$p5;
                $_SESSION['p6']=$p6;
				$_SESSION['p7']=$p7;
				$_SESSION['p8']=$p8;
				$_SESSION['p9']=$p9;
				$_SESSION['p10']=$p10;
				//include('example.php');
				header('Location:u2.php');
			}
		?>

		<header id="header1">ABC</header>
		
		<h2 align="center">Practitioner Registration Form</h2>
		<p align="center">Register as a practitioner</p>
		
		<div class="container">
            <form name="pract" action="uprac.php" method="post" onsubmit="return validateForm()">
				<div class="row">
					<div class="col-25">
						<b>Old Practitioner Name</b><span>*</span>
					</div>
					<div class="col-75">
						<input type="text" id="fname" name="oname" placeholder="Enter Old Practitioner Name">
					</div>
				</div>
                <div class="row">
					<div class="col-25">
						<b>New Practitioner Name</b>
					</div>
					<div class="col-75">
						<input type="text" id="fname" name="nname" placeholder="Enter New Practitioner Name">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<b>Old Specialization</b><span>*</span>
					</div>
					<div class="col-75">
						<input type="text" id="lname" name="ospl" placeholder="Enter Old Degree/Specialization">
					</div>
				</div>
                <div class="row">
					<div class="col-25">
						<b>New Specialization</b>
					</div>
					<div class="col-75">
						<input type="text" id="lname" name="nspl" placeholder="Enter New Degree/Specialization">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<b>Old Department</b><span>*</span>
					</div>
					<div class="col-75">
						<select id="department" name="odept">
                            <option value="" disabled selected>Choose Old department</option>
							<option value="Ortho">Ortho</option>
							<option value="Cardio">Cardio</option>
							<option value="Neuro">Neuro</option>
						</select>
					</div>
				</div>
                <div class="row">
					<div class="col-25">
						<b>New Department</b>
					</div>
					<div class="col-75">
						<select id="department" name="ndept">
                            <option value="" disabled selected>Choose New department</option>
							<option value="Ortho">Ortho</option>
							<option value="Cardio">Cardio</option>
							<option value="Neuro">Neuro</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<b>Old Working Hospital ID</b><span>*</span>
					</div>
					<div class="col-75">
						<input type="text" id="workingId" name="oworkingHospId" placeholder="Enter Old Organization Unique ID">
					</div>
				</div>
                <div class="row">
					<div class="col-25">
						<b>New Working Hospital ID</b>
					</div>
					<div class="col-75">
						<input type="text" id="workingId" name="nworkingHospId" placeholder="Enter New Organization Unique ID">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<b>Old Working proof ID</b><span>*</span>
					</div>
					<div class="col-75">
						<input type="text" id="proof" name="oproof" placeholder="Enter Old Working ID Number">
					</div>
				</div>
                <div class="row">
					<div class="col-25">
						<b>New Working proof ID</b>
					</div>
					<div class="col-75">
						<input type="text" id="proof" name="nproof" placeholder="Enter New Working ID Number">
					</div>
				</div>
				<br>
				<div class="row">
					<input type="submit" class="registerbtn" name="submit" value="Update">
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