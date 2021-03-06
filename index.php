<!DOCTYPE html>
<html lang = "en">
	<head>

		<title>NJIT Investment Club</title>
			<meta charset = "utf-8">
			<meta name = "description" content="Student-managed club where you can find information about investing, our events and portfolio">
			<meta name = "keywords" content ="NJIT, investing,investment,students, portfolio">
			
			<link rel = "shortcut icon" href ="images/favicon.ico">
			<link rel = "stylesheet" type ="text/css" href = "styles/main.css">
			
			<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
			<link rel="stylesheet" href="styles/bootstrap-iso.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	</head>

	<body>
		<?php include 'navigation.php'?>

		<main>
			<section>
				<br></br>
				
				<center>
					<div class="fadein">
				
				
						<img src="images/bloombergpic.jpg">
						<img src="images/logo.svg">
					</div>
				</center>
   



				<fieldset style = "background-color:#EEE">

					<h1><strong> Upcoming Events</strong></h1>
						<h3> First Meeting: JOIN US  </h3>
							<p> Posted on 10/07/16</p>
	
							<p class = "greyborder"> The Investment Club will start holding its meetings
							at the Leir Conference room on the 21st of October at 11:30pm. Any students
							are welcome to come.
							
							</p>
    	
						<br></br>
	
						<h3> Welcome to our new website! </h3> 
							<p>Posted on 10/01/16</p>
	 
							<p> Since the beginning of October the invesment
							club has its own website. If you are a new and you want 
							to access our Portfolio section or the Investing 101 class, 
							please register and fill out our formulary.</p>
				</fieldset>
	
			</section>
	
			<aside id="info-aside">
				<h2> Introduction</h2>
					<p>The NJIT Investment Club is committed to educating its members
					about investing in the stock market and investing for the long term.
					By managing a stock portfolio, students will be able to develop critical
					skills that will prepare them for the real world. Any student is 
					welcome to joining the club regardless of their abilities. 
					For those members that are not familiar with investing, the club teaches every semester
					Investing 101, which is an introduction to the markets and principals of value investing. 
					Analysts of the club will also be able to partipate in the CFA Research challenge which 
					tests a group´s ability to analyze a specific company. </p>
	  
				<p class = "bordertop"></p>
		
				<div class="bootstrap-iso" id="bootstrap-iso" style="text-align:center; margin-left:50px; margin-right:50px;">
					<ul class="nav nav-pills" id="tab-nav" style = "background-color:black;">
						<!--menu pills each representing a different div to display-->
						<li class="active"><a data-toggle="pill" href="#login">Login</a></li>
						<li><a data-toggle="pill" href="#register">Register</a></li>
						<li><a data-toggle="pill" href="#info">Info</a></li>
					</ul>
				
				
					<div class="tab-content">
						<div id="login" class="tab-pane fade in active">
							<form onsubmit="return sendLoginReq()">
								<br><h4>Username</h4>
								<input type = "text" name= "username" id= "username" placeholder = "Enter your username or email address" required>
								<br><h4>Password</h4>
								<input type = "password" password= "password" id = "password" required><br><br>
					
								<input type = "submit" name="login" value = "Log In" class = 'button' required><br><br>
							</form>
						</div>
						
						<div id="register" class="tab-pane fade">
							<form onsubmit="return sendRegisterReq()">
								
								<br><h4> First Name </h4>
								<input type = "text" id= "fname" name= "fname" placeholder = "enter your name" required>
								
								
								<br><h4>Email</h4>
								<input type = "email" id= "email" name= "email" placeholder = "enter your email" required>
								<br><br><h4>Desired Password</h4>
								<input type = "password" id = "password1" name = "password1" required><br><br>
								<br><h4>Confirm Password</h4>
								<input type = "password" id = "password2" name = "password2" required><br><br>
								
								<input type = "submit" name="login" value = "Register" class = 'button' required><br><br>
							</form>
						</div>
						
					</div>
				</div>
	 

					<p class = "bordertop"> Visit Us on Facebook!</p>
						<a href = "https://www.facebook.com/njitinvestmentclub/?ref=aymt_homepage_panel"><img src = "images/facebook_symbol.jpg" width= "50" height = "50"></a>
	 
					<p class = "bordertop"></p>
					
	
	
			</aside>

		</main>
		
       
	</body>
	
</html>

<script type="text/javaScript">
	
	$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
	});
	
	$(document).ready(function(){
		
	});
	
	function createRequestObject(){
		var ro;
		//Get name of browser
		var browser = navigator.appName;
		
		//Create browser-specific HTTP request object
		if(browser == "Microsoft Internet Explorer")
			ro = new ActiveXObject("Microsoft.XMLHTTP");  
		else
			ro = new XMLHttpRequest(); 
		return ro;
	}

	var http = createRequestObject();
	
	function sendLoginReq(){
		username = document.getElementById("username").value;
		password = document.getElementById("password").value;
		
		var url = "handler.php?object=login&username="+username+"&password="+password+"&junk="+Math.random();       
		http.open('get', url);
	   
		http.onreadystatechange = handleLoginResponse;
		http.send(null);
		
		return false;
	}

	function handleLoginResponse(){
		if( http.readyState == 4 ){   
			var response=http.responseText;
			document.getElementById("bootstrap-iso").innerHTML = response;
		}
	}
	
	function sendRegisterReq(){
		email = document.getElementById("email").value;
		password1 = document.getElementById("password1").value;
		password2 = document.getElementById("password2").value;
		
		var url = "handler.php?object=register&email="+email+"&password1="+password1+"&password2="+password2+"&junk="+Math.random();       
		http.open('get', url);
	   
		http.onreadystatechange = handleRegisterResponse;
		http.send(null);
		return false;
	}

	function handleRegisterResponse(){
		if( http.readyState == 4 ){   
			var response=http.responseText;
			document.getElementById("bootstrap-iso").innerHTML = response;
		}
	}
	
	
</script>
