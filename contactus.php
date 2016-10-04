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
			<?php include 'navigation.php'?>

			<main>	
				<h1>Contact Us</h1>
				    
				    <div class = "container3">
						<center><h2>Please direct us any questions or concerns</h2></center>
						<section style = "width:60%;">
						<ul class = "contact">
							
							<li><h3>First Name </h3></li>                                         
								 <input type = "text" name= "firstname" value = "" >
						
							<li><h3>Last Name</h3></li>
						    <input type = "text" name = "lastname" value = "">
							
					       <li><h3> Email Address</h3></li>
						   <input type = "email" name = "email" value = "">
							
							<h3>Comments</h3>
							<textarea name="comment" rows="5" cols="40" style = "margin-left:43px;"></textarea>
						    <br>
							<input type = "Submit" name= "Submit" value= "Submit" class = "button">
					        </section>
					         <aside style = "width:40%">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1960.065384419074!2d-74.17893032435067!3d40.74368236804558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99358877b939dd16!2sMartin+Tuchman+School+of+Management!5e0!3m2!1sen!2sus!4v1475452587911"
							width="400" height="350" frameborder="0" style="border:0;" allowfullscreen></iframe>
	                         </aside>
			
	                <div>


			</main>


		</body>


	</html>
