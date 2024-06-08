<?php

session_start();
if (!isset($_SESSION['username'])) 
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Click below for Live</title>

	<style type="text/css">
		body
		{
			background-image: url("imag09.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

		}
		.button
		{
			text-align: center;
			pa


		}

		.button2
		{
			
			font-size: 50px;
			border-radius: 10px;
			padding: 10px;
			padding-bottom: 5px;
			padding-left: 20px;
			padding-right: 20px;
			background-image: url("imag09.jpg");

		}
		.below
		{
			font-size: 45px;
			padding-top: 45px;
			padding-bottom: 30px;
			font-family: time;
			color: white;
		}



	</style>
	<?php

	include 'student_css.php'




	?>

	

</head>
<body>
	

	<?php

	include 'student_sidebar.php'

	?>

	<center>
		
		<div class="below">
			<p>Click below for Live :</p>
		</div>


		<div class="button">
			<a href="https://us04web.zoom.us/j/71735127538?pwd=mvJpHApZE5RmDWxmCTslAawuUz9xIl.1"><input class="button2" type="button" name="Cilck" value="Click"></a>
		</div>
		 
	</center>



	

</body>
</html>