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
	<title>Student Mangement System</title>
	

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style>
.about
{   
    padding-top:15px;
    padding-left:350px;
    font-size: 45px;
    font-family:Cursive;

}

.inf{
    font-family: Monospace;
    padding-top:55px;
    padding-left:400px;
    font-size:27px;
}

.text{
	position: relative;
	padding-top:50px;
	padding-left:370px;
	text-align: justify;
	padding-right:29px;
	font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	font-size:20px;
}

footer{
    position: relative;
	background-color: black;
	height: 70px;
	width: 100%;
}

.footer_txt
{
	text-align: center;
	color: white;
	top: 20%;
	position: relative;
	font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

nav
{
	position: relative;
	background-color: black;
	height: 70px;
	width: 100%;
	z-index: 1;
}

.logo
{
	font-size: 25px;
	position: relative;
	left: 5%;
	color: white;
	font-weight: bold;
	line-height: 70px;
	font-family: 'Courier New', Courier,monospace;
}

ul
{
	position: relative;
	float: right;
	margin-right:  35px;
	font-family: 'Courier New', Courier,monospace;
}
ul li
{
	display: inline-block;
	line-height:  70px;
	margin: 0 15px;
	
}



ul li a
{
	text-decoration: none;
	color: white;
	font-size: 18px;

}


</style>

</head>
<body>
	<nav>
		<label class="logo">Karna Coding academy</label>

		<ul>

			<li><a href="school.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="AdmissionForm.pdf">Offline Admission Form</a></li>

			<li><a href="login.php" class="btn btn-success">Login</a></li>
	
 


		</ul>
            <div>
            <label class="about">Karna Coding Academy About </label>
            </div>

            <div class="text">



	<p>Welcome to Karna Coding Academy, where we empower individuals with the skills and knowledge needed to thrive in the dynamic field of technology. Our academy is committed to fostering a supportive learning environment that encourages creativity, innovation, and collaboration.

	<p>**Our Mission**

	<p>At Karna Coding Academy, our mission is to democratize access to quality tech education. We believe that everyone, regardless of background or prior experience, should have the opportunity to learn and excel in coding and technology.

	<p>**Why Choose Karna Coding Academy?**


	<p>- Experienced Instructors :<p> Our team of dedicated instructors brings a wealth of industry experience and expertise to the classroom, ensuring that students receive top-notch instruction and guidance.

	<p>- Hands-On Learning :<p> We believe in learning by doing. Our curriculum is designed to be practical and hands-on, allowing students to apply what they learn in real-world projects and scenarios.

	<p>- Career Support : <p>We are committed to helping our students succeed not only during their time with us but also in their future careers. From resume building to interview preparation, we provide comprehensive career support services to help our graduates land their dream jobs.

	<p>- Community :<p> Joining Karna Coding Academy means becoming part of a vibrant and supportive community of learners, educators, and industry professionals. Through networking events, workshops, and mentorship programs, we help our students build valuable connections and relationships that last a lifetime.

	
	<p>**Our Programs**

	<p>At Karna Coding Academy, we offer a range of programs designed to meet the diverse needs and interests of our students. Whether you're a complete beginner or an experienced developer looking to level up your skills, we have a program for you. Our programs include:

		<p>- Full-Stack Web Development


		<p> **Get Started**

		<p>Ready to embark on your coding journey? Join us at Karna Coding Academy and take the first step towards a rewarding career in technology. Explore our programs, meet our instructors, and discover why [Your Coding Academy Name] is the right choice for you.



		<p>Feel free to customize this content to better fit the specifics of your coding academy and its offerings!</div>

        <div>
  
</div>


	
<footer>
		<h3 class="footer_txt">All @copyright reserved by Vi_Nii</h3>
	</footer>



</body>
</html>