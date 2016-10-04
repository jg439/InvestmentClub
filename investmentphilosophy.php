<!DOCTYPE html>
	<html lang = "en">
		<head>

			<title>NJIT Investment Club </title>
				<meta charset = "utf-8">
				<meta name = "description" content="Student-managed club where you can find information about investing, our events and portfolio">
				<meta name = "keywords" content ="NJIT, investing,investment,students, portfolio">

				<link rel = "shortcut icon" href ="images/favicon.ico">
				<link rel = "stylesheet" type ="text/css" href = "styles/main.css">
				
				<script type="text/javascript" language="JavaScript">
					
					function ReverseDisplay(d) {
						if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
						else { document.getElementById(d).style.display = "none"; }
					}
				</script>



		</head>

		<body>
			<header>
				<nav id = "upper_nav">
					<ul>
						<li><a href = "index.php">Login</a></li>
						<li><a href = "registration.html">Register</a></li>
					</ul>
				</nav>


				<img src = "images/logo.svg" alt = "logo" width ="250" height= "100">

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
				<section>
					<h1> Portfolio: NJIT´s investment philosophy</h1>
					
						<h2> Managing a real stock portfolio since the beginning of 2017</h2>
							<p> The portfolio that the Investment Club is managing consists of different
								companies that belong to technology and science related industries. At NJIT we believe 
								that the only way of making good investment decisions is by knowing perfectly how 
								businesses work. Therefore, we only invest in the following sectors:</p>

								<ul class = "nav1">
	
									<li><h2><a href="javascript:ReverseDisplay('healthcare')"> <input type = "button" name="h" value = "Healthcare" class = 'circularbutton'> </a></h2>
					
										<div id="healthcare" style="display:none;">
											<p>The healthcare sector is made up of many different industries – from pharmaceuticals and 
											devices to health insurers and hospitals – and each has different dynamics. Investments in this sector are affected by many variables, 
											including positive trends related to demographics and negative trends related to reimbursement. 
											Healthcare investing requires a multifaceted approach to understand the underlying drivers. 
											Investors can profit from investments in both the overall sector and/or its industries. </p>
										</div>
									</li>

	
									<li><h2><a href="javascript:ReverseDisplay('technology')"> <input type = "button" name="t" value = "Technology" class = 'circularbutton'></a></h2>
	
										<div id="technology" style="display:none;">
											<p>The technology sector is the category of stocks relating to the research,
											development and/or distribution of technologically based goods and services. This sector contains 
											businesses revolving around the manufacturing of electronics, creation of software, computers or products 
											and services relating to information technology.</p>
										</div>
									</li>
	
									<li><h2><a href="javascript:ReverseDisplay('industrials')"><input type = "button" name="i" value = "Industrials" class = 'circularbutton'> </a></h2>
	
										<div id="industrials" style="display:none;">
											<p>The industrial goods sector is a category of stocks that relate to producing goods used in construction and manufacturing. 
											This sector includes companies involved with aerospace and defense, industrial machinery, tools, lumber production, construction, 
											cement and metal fabrication. </p>
										</div>
									</li>
	
									<li><h2><a href="javascript:ReverseDisplay('financialservices')"> <input type = "button" name="fs" value = "Financial S" class = 'circularbutton'> </a></h2>
	
										<div id="financialservices" style="display:none;">
											<p>A category of stocks containing firms that provide financial services to commercial and retail customers. 
												This sector includes banks, investment funds, insurance companies and real estate. </p>
										</div>
									</li>
	
									<li><h2><a href="javascript:ReverseDisplay('energy')"> <input type = "button" name="e" value = "Energy" class = 'circularbutton'></a></h2>
						
										<div id="energy" style="display:none;">
											<p>The energy sector is a category of stocks that relate to producing or supplying energy. 
											This sector includes companies involved in the exploration and development of oil or gas reserves, 
											oil and gas drilling, or integrated power firms. </p>
										</div>
									</li>
	
									<li><h2><a href="javascript:ReverseDisplay('consumer')"> <input type = "button" name="c" value = "Consumer" class = 'circularbutton'> </a></h2>
	
										<div id="consumer" style="display:none;">
											<p>The consumer goods sector is a category of stocks and companies that relate to items purchased by individuals 
											rather than by manufacturers and industries. This sector includes companies involved with food production, 
											packaged goods, clothing, beverages, automobiles and electronics. </p>
										</div>
									</li>
	
									<li><h2><a href="javascript:ReverseDisplay('communicationservices')"><input type = "button" name="cs" value = "Communications" class = 'circularbutton'></a></h2>
	
										<div id="communicationservices" style="display:none;">
											<p>The telecommunications sector comprises companies that make communication possible on a global scale 
											whether through the phone or Internet. These companies created the infrastructure that allows data to be 
											sent anywhere in the world. The largest companies in the sector are wireless operators, satellite companies, cable companies and Internet service providers.</p>
										</div>
									</li>
								</ul>

				</section>

				<aside>
					<fieldset style = "background-color:#EEE">
						<h2 >Become a shareholder</h2>
							<p>The Invesment Club depends enterely on donations as its source of funds
							for maintaining a diversified portfolio. </p>
							<p>Since the beginning of July,NJIT provides a crowdfunding website where our members
							are able to donate.</p>
							<p>We truly appreciate your help. Please, click on the botton below and donate 
							if you want to become a shareholder.</p>
		
							<input type = "Submit" name= "DONATE NOW!" value= "Donate" class = "button">
					</fieldset>
				</aside>

	

			</main>



		</body>
	
	</html>
