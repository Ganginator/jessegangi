		<!-- 
		< ?php 
		
			include "includes/math.php";
			
		?>
		-->
		
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
		
		
		<style>
		
			#math-is-fun {
				width: 96%;
				text-align: center;
				margin: 0 auto;
				font-weight: bold;
			}
			
			xmp {
				width: 400px;
				text-align: left;
				margin: 0 auto;
				color: red;
			}
			
			h1 {
				color: darkblue;
			}
			
			h2 {
				color: silver;
			}
			
			h3 {
				color: green;
			}
			
			h4 {
				color: purple;
				text-decoration: underline;
			}
			
		</style>
		
		
		<div id="math-is-fun">
		
		
			<h1>Math is Fun</h1>
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			
			<h2>General Math</h2>
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			
			<div id="pythagorean-theorem">
			
			
				<h3>Pythagorean Theorem</h3>
				<br />
				
				<h4>Code:</h4>
				<br />
				
<xmp>
<math xmlns="http://www.w3.org/1998/Math/MathML">
	<mrow>
		<msup><mi>a</mi><mn>2</mn></msup>
			<mo>+</mo>
		<msup><mi>b</mi><mn>2</mn></msup>
			<mo>=</mo>
		<msup><mi>c</mi><mn>2</mn></msup>
	</mrow>
</math>
</xmp><br />
				
				<h4>Output:</h4>
				<br />
				<br />
				
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
				<br />
				
				
			</div><!-- / #pythagorean-theorem -->
			
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			<h2>FizzBuzz Test</h2>
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			
			<!-- http://rosettacode.org/wiki/FizzBuzz#PHP -->
			<div id="fizzbuzz-test">
			
			
				<h3>PHP</h3>
				<br />
				
				<h4>Code:</h4>
				<br />
				
<xmp>
<table border="0" width="100%"><tr><td>

< ?php 
	
	for ($i = 1; $i <= 100; $i++) {
	
		if (!($i % 20))
			echo "($i)\nBuzz,</td><td>";
		else if (!($i % 15))
			echo "($i)\nFizzBuzz,<br />";
		else if (!($i % 3))
			echo "($i)\nFizz,<br />";
		else if (!($i % 5))
			echo "($i)\nBuzz,<br />";
		else
			echo "$i,\n";
		
	}
	
?>

</td></tr></table>

... Test Complete ...
</xmp><br />
<br />
				
				
				<h4>Output:</h4>
				<br />
				<br />
				
				<table border="0" width="100%"><tr><td>
				
				<?php 
				
					for ($i = 1; $i <= 100; $i++) {
					
						if (!($i % 20))
							echo "($i)\nBuzz,</td><td>";
						else if (!($i % 15))
							echo "($i)\nFizzBuzz,<br />";
						else if (!($i % 3))
							echo "($i)\nFizz,<br />";
						else if (!($i % 5))
							echo "($i)\nBuzz,<br />";
						else
							echo "$i,\n";
						
					}
					
				?>
				
				</td></tr></table>
				
				... Test Complete ...<br />
				
				
			</div><!-- / #fizzbuzz-test -->
			
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			<h2>Time</h2>
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			
			<div id="time-fox-21-news">
			
			
				<h3>The time I have been at FOX 21 News:</h3>
				<br />
				
				<h4>Code:</h4>
				<br />
				
<xmp>
< ?php 

	$date1 = "2009-11-15";
	$date2 = date('Y-m-d');
	
	$diff = abs(strtotime($date2) - strtotime($date1));
	
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	
	printf("%d years, %d months, %d days\n", $years, $months, $days);
	
?>
</xmp><br />
<br />
				
				<h4>Output:</h4>
				<br />
				<br />
				
				<?php 
				
					$date1 = "2009-11-15";
					$date2 = date('Y-m-d');
					
					$diff = abs(strtotime($date2) - strtotime($date1));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?><br />
				<br />
				<br />
				
				
			</div><!-- / #time-fox-21-news -->
			
			
			<div id="time-aerial-corporations">
			
			
				<h3>The time I have been developing as Aerial Corporations:</h3>
				<br />
				
				<h4>Code:</h4>
				<br />
				
<xmp>
< ?php 

	$date3 = "2007-03-17";
	$date4 = date('Y-m-d');
	
	$diff = abs(strtotime($date4) - strtotime($date3));
	
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	
	printf("%d years, %d months, %d days\n", $years, $months, $days);
	
	?>
</xmp><br />
<br />
				
				<h4>Output:</h4>
				<br />
				<br />
				
				<?php 
				
					$date3 = "2007-03-17";
					$date4 = date('Y-m-d');
					
					$diff = abs(strtotime($date4) - strtotime($date3));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?><br />
				<br />
				<br />
				
				
			</div><!-- / #time-aerial-corporations -->
			
			
			<div id="time-developing">
			
			
				<h3>The time I have been developing entirely:</h3>
				<br />
				
				<h4>Code:</h4>
				<br />
				
<xmp>
< ?php 

	$date5 = "2002-09-02";
	$date6 = date('Y-m-d');
	
	$diff = abs(strtotime($date6) - strtotime($date5));
	
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	
	printf("%d years, %d months, %d days\n", $years, $months, $days);
	
?>
</xmp><br />
<br />
				
				<h4>Output:</h4>
				<br />
				<br />
				
				<?php 
				
					$date5 = "2002-09-02";
					$date6 = date('Y-m-d');
					
					$diff = abs(strtotime($date6) - strtotime($date5));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?><br />
				<br />
				<br />
				
			</div><!-- / #time-developing -->
			
			
			<div id="time-geocities">
			
			
				<!-- http://en.wikipedia.org/wiki/GeoCities - Angel Fire-->
				<h3>The time since my first site (Does Geocities really count?):</h3>
				<br />
				
				<h4>Code:</h4>
				<br />
				
<xmp>
< ?php

	$date7 = "1998-09-02";
	$date8 = date('Y-m-d');
	
	$diff = abs(strtotime($date8) - strtotime($date7));
	
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	
	printf("%d years, %d months, %d days\n", $years, $months, $days);
	
?>
</xmp><br />
<br />
				
				<h4>Output:</h4>
				<br />
				<br />
				
				<?php
				
					$date7 = "1998-09-02";
					$date8 = date('Y-m-d');
					
					$diff = abs(strtotime($date8) - strtotime($date7));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					
					printf("%d years, %d months, %d days\n", $years, $months, $days);
					
				?><br />
				<br />
				
				
			</div><!-- / #time-geocities -->
			
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			<h2>Domains, and Pricing</h2>
			
			<hr class="featurette-divider" /><!-- Bootstrap / -->
			
			
			<!-- DO NOT INDENT THIS, EASIER FOR EDITING -->
			<div id="domains_list">
			
			
				<h3>Domains, and Pricing: (Consider splitting these)</h3><br />
				
				<h4>Code:</h4>
				<br />
				
<xmp>
*NONE*
</xmp><br />
<br />
				
				<h4>Output:</h4>
				<br />
				<br />
				
52 Domains 
@ $10 a Domain 
= $520 a Year <br />
/ 12 Months 
= $44 a Month <br />
+ $50 a Month Hosting 
= $94 a Month Total<br />
<br />
$50 a Month Hosting 
/ 52 Domains 
= $1 a Domain a Year Hosting<br />
<br />
18 Cook Domains 
@ $10 a Domain 
= $180 a Year <br />
/ 12 Months 
= $15 a Month<br />
<br />
18 Cook Domains 
@ $1 a Domain a Year Hosting 
= $18 a Year Hosting <br />
/ 12 Months 
= $1.5 a Month Hosting<br />
<br />
$15 a Month Cook Domains 
+ $1.5 a Month Cook Hosting 
= $16.5 a Month for Cook<br />
<br />
<br />
<br />
				
				
			</div><!-- / #domains_list -->
			
			
		</div><!-- / #math-is-fun -->