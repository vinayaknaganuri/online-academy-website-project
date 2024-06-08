<?php
error_reporting(0);
session_start();
session_destroy();
if ($_SESSION['message']) 
{
	$message=$_SESSION['message'];

	echo "<script type='text/JavaScript'> alert('$message') </script>";
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Karna Online Coding academy</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<body>
	<nav>
		<label class="logo">Karna Online Coding academy</label>

		<ul>

			<li><a href="school.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="AdmissionForm.pdf">Offline Admission Form</a></li>

			<li><a href="login.php" class="btn btn-success">Login</a></li>
			

		</ul>
	</nav>

	<div class="section1">

		<img class="main_img" src="2.JPG">
		

	</div>

	<div class="container">
		<div class="col-md-4">
			<img class="welcome_img" src="11.JPG">
		</div>

		<div class="col">
			<h1>Welcome To Karna Codecademy</h1>
		</div>

		 

		<div class="p">
			<p>   Join India's leading Full Stack Development Course that is based on an industry-relevant curriculum, learn from expert faculty who have hands-on experience, and get guaranteed job interviews* with our 2000+ hiring partners until you land your first job.</p>
		</div>
		
		
		
	</div>

	<center>
		<h1 class="our">Our Academy</h1>
	</center>

	<div class="container">

		<div class="row">

			<div class="col-md-4">
				<img class="teacher" src="11.JPG">
				
			</div>

			<div class="col-md-4">
				<img class="teacher" src="4.JPG">
				
			</div>

			<div class="col-md-4">
				<img class="teacher" src="5.JPG">
				
			</div>

			<center class="cen">
				<h1 class="adm">Admission Form</h1>
			</center>
			<div align="center" class="admission_form">
				
				<form action="data_check.php" method="POST">
					<div class="adm_int">
						<label class="label_text">Name</label>
						<input class="input_deg" type="text" name="name" required/>
					</div>

					<div class="adm_int">
						<label class="label_text">Email</label>
						<input class="input_deg" type="text" name="email" required/>
					</div>

					<div class="adm_int">
						<label class="label_text">Phone</label>
						<input class="input_deg" type="text" name="phone"  required/>
					</div>

					<div class="adm_int">
						<label class="label_text">Message</label>
						<textarea class="input_txt" name="message"></textarea>
					</div>

					<div class="adm_int">
						
						<input class="btn btn-primary"
						id="submit"  type="submit"
						value="Apply" name="apply">
					</div>
				</form>


			</div>

		</div>

	


	</div>	

	<footer>
		<h3 class="footer_txt">All @copyright reserved by Vi_Nii</h3>
	</footer>



</body>
</html>