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

	<h1>Register</h1>
	<form action = "action_page.php">
	<fieldset>
	<legend>Contact Information</legend>

	 <p>First Name</p>
	 <input type = "text" name= "firstname" value = "" >
	 <p>Last Name</p>
	 <input type = "text" name = "lastname" value = "">
	 <p>UCID</p>
	 <input type = "text" name= "username" placeholder = "Your UCID contains letters" value = "">
	 <p>New Password</p>
	 <input type = "password" name = "password" value = "">
     <p>Confirm Password</p>
	 <input type = "password" name = "cpassword" value = "">
	 <p>Major</p>
	 <input type = "text" name= "major">
	 <p>Comments</p>
	 <textarea name="comment" rows="5" cols="40"></textarea>
	 <br>
	 <input type = "Submit" name= "Submit" value= "Submit" class = "button">
	 </fieldset>
	 
	</main>
</body>
</html>
