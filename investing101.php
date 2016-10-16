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
			<?php include 'navigation.php'?>

			<main>
    
				<h1> Investing 101</h1>
		             
					<center>
					<img src = "images/Investing101.png" class = "imagemargin">
		
					<div class = "container2">
						<h2> NJIT´s Training Program </h2>
						<p>Investing 101 is a 10-week training program created by the Investment Club with the collaboration of the
						School of Management where participants are introduced to the basics of investing.  
						Any current student of the school is welcome to join us and learn the club´s investment philosophy.</p>
						

						<nav id ="week_menu">
							<ul>
								<li><a href="javascript:ReverseDisplay('week1')"> <input type = "button" name="week1" value = "Week 1" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week2')"> <input type = "button" name="week2" value = "Week 2" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week3')"> <input type = "button" name="week3" value = "Week 3" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week4')"> <input type = "button" name="week4" value = "Week 4" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week5')"> <input type = "button" name="week5" value = "Week 5" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week6')"> <input type = "button" name="week6" value = "Week 6" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week7')"> <input type = "button" name="week7" value = "Week 7" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week8')"> <input type = "button" name="week8" value = "Week 8" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week9')"> <input type = "button" name="week9" value = "Week 9" class = 'weekbutton'></li>
								<li><a href="javascript:ReverseDisplay('week10')"> <input type = "button" name="week10" value = "Week 10" class = 'weekbutton'></li>
					
								<div id="week1" style="display:none;">
									<h3> 1. Sector Overview </h3>
										<p> This week we will cover the different sectors that the market has.</p>
								</div>
					
								<div id="week2" style="display:none;">
									<h3> 2. Industries Overview</h3>
										<p> After the sector selection, the investors will pick up the industry that they would like to do 
										research about.
										</p>
								</div>
					
								<div id="week3" style="display:none;">
									<h3> 3. Stock Pick-Up: Business Description</h3>
										<p> </p>
							
								</div>
					
								<div id="week4" style="display:none;">
									<h3> 4. Stock Financial Analysis</h3>
										<p> This meeting we will cover the financial statements of a company.</p>
								</div>
					
								<div id="week5" style="display:none;">
									<h3> 5. Valuation</h3>
										<p> In this class the students will become familiar with the different valuation methods
										used to determine the price of a stock</p>
								</div>
							
								<div id="week6" style="display:none;">
									<h3>  6. Investment Risk </h3>
										<p>What are the perils of this investment?</p>
								</div>
							
								<div id="week7" style="display:none;">
									<h3>7. Other Headings</h3>
										<p>News of the company</p>
							
								</div>
							
								<div id="week8" style="display:none;">
									<h3> 8. Investment Summary</h3>
										<p> Do you consider the stock a good investment?</p>
								
								</div>
							
								<div id="week9" style="display:none;">
									<h3> 9. Presentations</h3>
										<p> In this class the students will learn to develop a ten minute
										test that will allow them to separate attractive companies that
										deserve a deeper analysis from non-attractive companies.</p>
								</div>
							
								<div id="week10" style="display:none;">
									<h3> 10. Presentation of the Portfolio</h3>
										<p>Final meeting where we will sum up the transactions made</p>
								</div>
					
					
							</ul>
			
						</nav>
				
					</div>
					</center>
			</main>
			
		</body>

	</html>
