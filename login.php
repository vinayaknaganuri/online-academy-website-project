<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>




<body background="13.jpg" class="body_deg">





	<center>
		
		<div class="form_deg">

			<center class="title_deg">
				<h2>Login Form</h2>

				<h4>
					<?php

					error_reporting(0);
					session_start();
					session_destroy();
					echo $_SESSION['loginMessage'];
					?>

				</h4>
			</center>

			

			<form action="login_check.php" method="POST" class="login_form">
				<div>
					

					<label class="label_deg">UserName : </label>

				<input class="use" type="text" name="username" placeholder="User Name">
				
				</div>
				
				


					
					
				<label class="label_deg">Password : </label>

				<input class="pass" type="password" name="password" placeholder="Password">


			

	

				<div class="SUBMIT">

					<input class="btn btn-primary" type="submit" name="submit" value="Login">


	

				
				
				

			</form>

		</div>

	
	</center>



</body>



</html>