<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1>Thank you!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>

<!DOCTYPE html>
	<html lang = "en">
		<head>

			<title>NJIT Investment Club </title>
				<meta charset = "utf-8">
				<meta name = "description" content="Student-managed club where you can find information about investing, our events and portfolio">
				<meta name = "keywords" content ="NJIT, investing,investment,students, portfolio">

				<link rel = "shortcut icon" href ="images/favicon.ico">
				<link rel = "stylesheet" type ="text/css" href = "styles/main.css">
		</head>

		<body>
			<header>

				<nav id = "upper_nav">
					<ul>
						<li><a href = "#log">Login</a></li>
						<li><a href = "registration.html">Register</a></li>
					</ul>
				</nav>


				<img src = "images/NJIT_logo.png" alt = "logo" width ="250" height= "100">

				<div id="header">
					<ul class="nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="">About</a>
							<ul>
								<li><a href="team.php">Team</a></li>
								<li><a href="challenges.php">Challenges</a></li>
							</ul>
						</li>
							
						<li><a href="">Portfolio</a>
							<ul>
								<li><a href="investmentphilosophy.php">Our Investment Philosophy</a></li>
								<li><a href="executedtrades.php">Executed Trades</a></li>
							</ul>
						</li>
							
						<li><a href="calendar.php">Calendar</a></li>
						<li><a href="">Classes</a>
							<ul>
								<li><a href="investing101.php">Investing 101</a></li>
								<li><a href="bloomberg.php">Bloomberg Terminal</a></li>
							</ul>
						</li>
						<li><a href="media.php">Media</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
			
					</ul>
				</div>
			

			</header>

			<main>	
				<h1>Contact Us</h1>
					<fieldset>
						<p>Please direct us any questions or concerns</p>
							<p>First Name</p>
								<input type = "text" name= "firstname" value = "" >
							<p>Last Name</p>
								<input type = "text" name = "lastname" value = "">
							<p>Comments</p>
								<textarea name="comment" rows="5" cols="40"></textarea>
						
							<input type = "Submit" name= "Submit" value= "Submit" class = "button">
	 
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1270.950082493455!2d-74.1775238345283!3d40.74341927822273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1465914604977" 
							class= "googleimg"width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	
					</fieldset>
	


			</main>


		</body>


	</html>
