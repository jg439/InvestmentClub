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
	<li><a href = "">Register</a></li>
	<li><a href = "">Search</a></li>
</ul>
</nav>
<img src = "images/NJIT_logo.png" alt = "logo" width ="150" height= "100">

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
