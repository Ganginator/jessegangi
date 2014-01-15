		<!-- Include the page Content based on the URL. -->
		<?php
		
			if(isset($_GET['page'])) {
			
				// Roll GET into a variable so you can do some error checking if you wish, and clean it up if need be. // 
				$page = $_GET['page'];
				
				switch($page) {
				
					case 'about':
						echo ('<h1 class="title-page">Would You Like to Know More?</h1>');
						include('includes/content/about.php');
						break;
						
					case 'about/experience':
						echo ('<h1 class="title-page">Where I Worked, when I worked there, and what I did.</h1>');
						include('includes/content/experience.php');
						break;
						
					case 'about/portfolio':
						echo ('<h1 class="title-page">My work over the years.</h1>');
						include('includes/content/portfolio.php');
						break;
						
					case 'about/activities':
						echo ('<h1 class="title-page">Things outside of professional experience.</h1>');
						include('includes/content/activities.php');
						break;
						
					case 'about/education':
						echo ('<h1 class="title-page">Where I went to school.</h1>');
						include('includes/content/education.php');
						break;
						
					case 'tools':
						echo ('<h1 class="title-page">Programs/software that makes my life easier.</h1>');
						include('includes/content/tools.php');
						break;
						
					case 'tools/software':
						echo ('<h1 class="title-page">Things that make my life easier.</h1>');
						include('includes/content/software.php');
						break;
						
					case 'tools/code':
						echo ('<h1 class="title-page">Programming languages I use.</h1>');
						include('includes/content/code.php');
						break;
						
					case 'tools/frameworks':
						echo ('<h1 class="title-page">Scafolding, to build with.</h1>');
						include('includes/content/frameworks.php');
						break;
						
					case 'links':
						echo ('<h1 class="title-page">External professional pages.</h1>');
						include('includes/content/links.php');
						break;
						
					case 'contact':
						echo ('<h1 class="title-page">Get a hold of me!</h1>');
						include('includes/content/contact.php');
						break;
						
					case 'math':
						echo ('<h1 class="title-page">"It\'s all about the percent."</h1>');
						include('includes/math.php');
						break;
						
					default:
						echo ('<h1 class="title-page">Welcome!</h1>');
						include('includes/content/home.php');
						break;
						
				}
			
			} else {
			
				echo ('<h1 class="title-page">Welcome!</h1>');
				include('includes/content/home.php');
				
			}
			
		?>