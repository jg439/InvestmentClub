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
				<section>
					<h1> Portfolio: NJIT´s investment philosophy</h1>
					
						<h2> Managing a real stock portfolio since the beginning of 2017</h2>
							<p> The portfolio that the Investment Club is managing consists of different
								companies that belong to technology and science related industries. At NJIT we believe 
								that the only way of making good investment decisions is by knowing perfectly how 
								businesses work.</p>

								<ul class = "nav1">
	
									<li><h2><a href="javascript:ReverseDisplay('consumerdiscretionary')"><input type = "button" name="cd" value = "Consumer Discretionary" class = 'circularbutton'></a></h2>
	
										<div id="consumerdiscretionary" style="display:none;">
											<p>The Consumer Discretionary Sector encompasses those industries that tend to be the most sensitive to economic cycles.
											Its manufacturing segment includes automotive, household durable goods, textiles & apparel and leisure equipment.
											The services segment includes hotels, restaurants and other leisure facilities, media production and services,
											and consumer retailing and services.</p>
										</div>
									</li>
									
									<li><h2><a href="javascript:ReverseDisplay('consumerstaples')"> <input type = "button" name="c" value = "Consumer Staples" class = 'circularbutton'> </a></h2>
	
										<div id="consumerstaples" style="display:none;">
											<p>The Consumer Staples Sector comprises companies whose businesses are less sensitive to economic cycles. It includes manufacturers and distributors of food,
											beverages and tobacco and producers of non-durable household goods and personal products. It also includes food & drug retailing 
											companies as well as hypermarkets and consumer super centers.</p>
										</div>
									</li>
	
									<li><h2><a href="javascript:ReverseDisplay('energy')"> <input type = "button" name="e" value = "Energy" class = 'circularbutton'></a></h2>
						
										<div id="energy" style="display:none;">
											<p>The Energy Sector comprises companies whose businesses are dominated by either of the following activities: The construction or provision of oil rigs, drilling equipment 
											and other energy related service and equipment, including seismic data collection. Companies engaged in the exploration, production, marketing, refining
											and/or transportation of oil and gas products, coal and other consumable fuels. </p>
										</div>
									</li>
									
									<li><h2><a href="javascript:ReverseDisplay('financials')"> <input type = "button" name="f" value = "Financials" class = 'circularbutton'> </a></h2>
	
										<div id="financials" style="display:none;">
											<p>The Financial Sector contains companies involved in activities such as banking, mortgage finance, consumer finance, specialized finance,
											investment banking and brokerage, asset management and custody, corporate lending, insurance, financial investment,
											real estate investment trusts (REITs), as well as companies engaged in real estate management & development.</p>
										</div>
									</li>
									
									<li><h2><a href="javascript:ReverseDisplay('healthcare')"> <input type = "button" name="h" value = "Healthcare" class = 'circularbutton'> </a></h2>
					
										<div id="healthcare" style="display:none;">
											<p>The Health Care Sector encompasses two main industry groups. The first includes companies who manufacture health care equipment and supplies or provide health care related services,
											including distributors of health care products, providers of basic health-care services,
											and owners and operators of health care facilities and organizations. The second regroups companies primarily involved in the research,
											development, production and marketing of pharmaceuticals and biotechnology products. </p>
										</div>
									</li>

									<li><h2><a href="javascript:ReverseDisplay('industrials')"><input type = "button" name="i" value = "Industrials" class = 'circularbutton'> </a></h2>
	
										<div id="industrials" style="display:none;">
											<p>The Industrials Sector includes companies whose businesses are dominated by one of the following activities: The manufacture and distribution of capital goods,
											including aerospace & defense, construction, engineering & building products, electrical equipment and industrial machinery.
											The provision of commercial services and supplies, including printing, employment, environmental and office services.
											The provision of transportation services, including airlines, couriers, marine, road & rail and transportation infrastructure. </p>
										</div>
									</li>
									
	
									<li><h2><a href="javascript:ReverseDisplay('informationtechnology')"> <input type = "button" name="t" value = "InformationTechnology" class = 'circularbutton'></a></h2>
	
										<div id="informationtechnology" style="display:none;">
											<p>The Information Technology Sector covers the following general areas: firstly, Technology Software & Services, including companies that primarily develop
											software in various fields such as the Internet, applications, systems, databases management and/or home entertainment, and companies that provide information technology 
											consulting and services, as well as data processing and outsourced services; secondly Technology Hardware & Equipment,
											including manufacturers and distributors of communications equipment, computers & peripherals, electronic equipment and related instruments; and thirdly,
											Semiconductors & Semiconductor Equipment Manufacturers.</p>
										</div>
									</li>
	
									
									<li><h2><a href="javascript:ReverseDisplay('materials')"><input type = "button" name="m" value = "Materials" class = 'circularbutton'></a></h2>
	
										<div id="materials" style="display:none;">
											<p>The Materials Sector encompasses a wide range of commodity-related manufacturing industries. 
											Included in this sector are companies that manufacture chemicals, construction materials, glass, paper, 
											forest products and related packaging products, and metals, minerals and mining companies, including producers of steel.
											
											</p>
										</div>
									</li>
									
	
									<li><h2><a href="javascript:ReverseDisplay('realstate')"><input type = "button" name="cs" value = "Real State" class = 'circularbutton'></a></h2>
	
										<div id="realstate" style="display:none;">
											<p>The Real Estate Sector contains all REITs, with the exception of Mortgage REITs, (which remain in the Financial sector).
											Additionally, the sector includes Real Estate Management and Development services.</p>
										</div>
									</li>
	
									<li><h2><a href="javascript:ReverseDisplay('telecommunicationservices')"><input type = "button" name="cs" value = "Telecommunications Services" class = 'circularbutton'></a></h2>
	
										<div id="telecommunicationservices" style="display:none;">
											<p>The Telecommunications Services Sector contains companies that provide communications services primarily through
											a fixed-line, cellular, wireless, high bandwidth and/or fiber optic cable network.</p>
										</div>
									</li>
								
									<li><h2><a href="javascript:ReverseDisplay('utilities')"><input type = "button" name="u" value = "Utilities" class = 'circularbutton'></a></h2>
	
										<div id="utilities" style="display:none;">
											<p>
											The Utilities Sector encompasses those companies considered electric, gas or water utilities, or companies that operate as independent producers and/or distributors of power.
											
											</p>
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
		
							<a href = "https://njit-connect.njit.edu/foundation-donation-form"><input type = "Submit" name= "DONATE NOW!" value= "Donate" class = "button" ></a>
					</fieldset>
				</aside>

	

			</main>



		</body>
	
	</html>
