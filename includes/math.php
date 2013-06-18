		<!-- http://www.tutorialspoint.com/html5/html5_mathml.htm -->
		
		<!-- 
		05/01/2009;
		01/17/2013;
		Those dates are 5,375 days apart.
		1 Year = 365.242 Days.
		Therefore;
		(After the <head> call id="math" with result, that is until the math, actually works...)
		5375 x 365.242 = 1,963,175.75
		5375 / 365.242 = 14.72
		-->
		
		
		<div id="mathisfun" style="text-align: center;">
		
		
			<!-- THIS HAS TO HAVE CENTER ON THE DIV AS WELL, PROBABLY BECAUSE OF THE CSS --><br />
			
			<h1 style="text-align: center;">Math is Fun</h1>
			
			<h2>Pythagorean theorem</h2>
			
			
			<span style="font-weight: bold;">
			
				<math xmlns="http://www.w3.org/1998/Math/MathML">
					<mrow>
					<msup><mi>a</mi><mn>2</mn></msup>
					<mo>+</mo>
					<msup><mi>b</mi><mn>2</mn></msup>
					<mo>=</mo>
					<msup><mi>c</mi><mn>2</mn></msup>
					</mrow>
				</math>
				<br />
				
			</span>
			
			
			<h2 style="text-align: center; font-weight: bold;">The time I have been at FOX 21:</h2>
			
			<span style="font-weight: bold;">
			
			
				<?php
				
					$date1 = "2009-11-15";
					$date2 = date('Y-m-d');
					
					$diff = abs(strtotime($date2) - strtotime($date1));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?>
				<br />
				
				
			</span>
			
			<h2 style="text-align: center; font-weight: bold;">The time I have been developing<br />
			as Aerial Corporations:</h2>
			
			<span style="font-weight: bold;">
			
			
				<?php
				
					$date3 = "2007-03-17";
					$date4 = date('Y-m-d');
					
					$diff = abs(strtotime($date4) - strtotime($date3));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?>
				<br />
				
				
			</span>
			
			<h2 style="text-align: center; font-weight: bold;">The time I have been developing entirely:</h2>
			
			<span style="font-weight: bold;">
			
			
				<?php
				
					$date5 = "2002-09-02";
					$date6 = date('Y-m-d');
					
					$diff = abs(strtotime($date6) - strtotime($date5));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?>
				<br />
				
				
			</span>
			
			<!-- http://en.wikipedia.org/wiki/GeoCities -->
			
			<h2 style="text-align: center; font-weight: bold;">The time since my first site<br />
			(Does Geocities really count?):</h2>
			
			<span style="font-weight: bold;">
			
			
				<?php
				
					$date7 = "1998-09-02";
					$date8 = date('Y-m-d');
					
					$diff = abs(strtotime($date8) - strtotime($date7));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?>
				<br />
				<br />
				
				
			</span>
			
			
			<div id="domains_list"><!-- DO NOT INDENT THIS, EASIER FOR EDITING -->
			
			
52 Domains 
@ $10 a Domain 
= $520 a Year 
/ 12 Months 
= $44 a Month 
+ $50 a Month Hosting 
= $94 a Month Total<br />
<br />
$50 a Month Hosting 
/ 52 Domains 
= $1 a Domain a Year Hosting<br />
<br />
18 Cook Domains 
@ $10 a Domain 
= $180 a Year 
/ 12 Months 
= $15 a Month<br />
<br />
18 Cook Domains 
@ $1 a Domain a Year Hosting 
= $18 a Year Hosting 
/ 12 Months 
= $1.5 a Month Hosting<br />
<br />
$15 a Month Cook Domains 
+ $1.5 a Month Cook Hosting 
= $16.5 a Month for Cook<br />
<br />
				
				
			</div><!-- / #domains_list -->
			
			
		</div><!-- / #mathisfun -->
		
		