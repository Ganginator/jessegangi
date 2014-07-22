		<!-- ROOT/includes/page.php -->
		
		
		<!-- Include the page Content based on the URL. -->
		<?php
		
			if(isset($_GET['page'])) {
			
				// Roll GET into a variable so you can do some error checking if you wish, and clean it up if need be. // 
				$page = $_GET['page'];
				
				switch($page) {
				
					case 'home':
						echo ('<h1 class="title-page">Welcome!</h1>');
						include('includes/pages/home.php');
						break;
					
					case 'home/':
						echo ('<h1 class="title-page">Welcome!</h1>');
						include('includes/pages/home.php');
						break;
					
					case 'about':
						echo ('<h1 class="title-page">Would You Like to Know More?</h1>');
						include('includes/pages/about.php');
						break;
					
					case 'about/':
						echo ('<h1 class="title-page">Would You Like to Know More?</h1>');
						include('includes/pages/about.php');
						break;
						
						/* About Pages */
						
						case 'about/experience':
							echo ('<h1 class="title-page">Professional history.</h1>');
							include('includes/pages/about/experience.php');
							break;
							
						case 'about/experience/':
							echo ('<h1 class="title-page">Professional history.</h1>');
							include('includes/pages/about/experience.php');
							break;
							
						case 'about/education':
							echo ('<h1 class="title-page">Knowledge.</h1>');
							include('includes/pages/about/education.php');
							break;
							
						case 'about/education/':
							echo ('<h1 class="title-page">Knowledge.</h1>');
							include('includes/pages/about/education.php');
							break;
							
							/* Education Pages */
							
							case 'about/education/learning':
								echo ('<h1 class="title-page">?</h1>');
								include('includes/pages/about/education/learning.php');
								break;
								
							case 'about/education/learning/':
								echo ('<h1 class="title-page">?</h1>');
								include('includes/pages/about/education/learning.php');
								break;
								
							/* / Education Pages */
							
						case 'about/activities':
							echo ('<h1 class="title-page">The other things.</h1>');
							include('includes/pages/about/activities.php');
							break;
							
						case 'about/activities/':
							echo ('<h1 class="title-page">The other things.</h1>');
							include('includes/pages/about/activities.php');
							break;
							
						case 'about/portfolio':
							echo ('<h1 class="title-page">Examples of my work.</h1>');
							include('includes/pages/about/portfolio.php');
							break;
							
						case 'about/portfolio/':
							echo ('<h1 class="title-page">Examples of my work.</h1>');
							include('includes/pages/about/portfolio.php');
							break;
							
						case 'about/references':
							echo ('<h1 class="title-page">What people say.</h1>');
							include('includes/pages/about/references.php');
							break;
							
						case 'about/references/':
							echo ('<h1 class="title-page">What people say.</h1>');
							include('includes/pages/about/references.php');
							break;
							
						/* / About Pages */
					
					case 'tools':
						echo ('<h1 class="title-page">Things that make my life easier.</h1>');
						include('includes/pages/tools.php');
						break;
						
					case 'tools/':
						echo ('<h1 class="title-page">Things that make my life easier.</h1>');
						include('includes/pages/tools.php');
						break;
						
						/* Tools Pages */
						
						/* TESTING EXPLOSIONS - Software | Application Programs */
						
						case 'tools/software':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case 'tools/software/':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case '?page=tools/software':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case '?page=tools/software/':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case 'index.phptools/software':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case 'index.phptools/software/':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case 'index.php/tools/software':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case 'index.php/tools/software/':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case 'index.php?page=tools/software':
							echo ('<h1 class="title-page">Helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
							
						case 'index.php?page=tools/software/':
							echo ('<h1 class="title-page">My little helpers.</h1>');
							include('includes/pages/tools/software.php');
							break;
						
						/* TESTING EXPLOSIONS - Software */
						
						case 'tools/frameworks':
							echo ('<h1 class="title-page">Scaffolding, to build with.</h1>');
							include('includes/pages/tools/frameworks.php');
							break;
							
						case 'tools/frameworks/':
							echo ('<h1 class="title-page">Scaffolding, to build with.</h1>');
							include('includes/pages/tools/frameworks.php');
							break;
							
						case 'tools/code':
							echo ('<h1 class="title-page">Languages.</h1>');
							include('includes/pages/tools/code.php');
							break;
							
						case 'tools/code/':
							echo ('<h1 class="title-page">Languages.</h1>');
							include('includes/pages/tools/code.php');
							break;
							
						case 'tools/learning':
							echo ('<h1 class="title-page">Always a student; always learning.</h1>');
							include('includes/pages/tools/learning.php');
							break;
							
						case 'tools/learning/':
							echo ('<h1 class="title-page">Always a student; always learning.</h1>');
							include('includes/pages/tools/learning.php');
							break;
							
						case 'tools/hardware':
							echo ('<h1 class="title-page">Machines, Components, and Toys.</h1>');
							include('includes/pages/tools/hardware.php');
							break;
							
						case 'tools/hardware/':
							echo ('<h1 class="title-page">Machines, Components, and Toys.</h1>');
							include('includes/pages/tools/hardware.php');
							break;
							
							
						/* / Tools Pages */
					
					case 'links':
						echo ('<h1 class="title-page">My external pages.</h1>');
						include('includes/pages/links.php');
						break;
						
					case 'links/':
						echo ('<h1 class="title-page">My external pages.</h1>');
						include('includes/pages/links.php');
						break;
						
					case 'contact':
						echo ('<h1 class="title-page">Communication.</h1>');
						include('includes/pages/contact.php');
						break;
						
					case 'contact/':
						echo ('<h1 class="title-page">Making connections.</h1>');
						include('includes/pages/contact.php');
						break;
						
					case 'terms':
						echo ('<h1 class="title-page">Legaleze...</h1>');
						include('includes/pages/terms.php');
						break;
						
					case 'terms/':
						echo ('<h1 class="title-page">Legaleze...</h1>');
						include('includes/pages/terms.php');
						break;
						
					case 'privacy':
						echo ('<h1 class="title-page">Don\'t tread on me.</h1>');
						include('includes/pages/privacy.php');
						break;
						
					case 'privacy/':
						echo ('<h1 class="title-page">Don\'t tread on me.</h1>');
						include('includes/pages/privacy.php');
						break;
						
					case 'information':
						echo ('<h1 class="title-page">Knowledge is Power!</h1>');
						include('includes/pages/information.php');
						break;
						
					case 'information/':
						echo ('<h1 class="title-page">Knowledge is Power!</h1>');
						include('includes/pages/information.php');
						break;
						
					case 'math':
						echo ('<h1 class="title-page">It\'s all about the percent!</h1>');
						include('includes/pages/math.php');
						break;
						
					case 'math/':
						echo ('<h1 class="title-page">It\'s all about the percent!</h1>');
						include('includes/pages/math.php');
						break;
						
					default:
						echo ('<h1 class="title-page">Welcome!</h1>');
						include('includes/pages/home.php');
						break;
						
				}
			
			} else {
			
				echo ('<h1 class="title-page">Welcome!</h1>');
				include('includes/pages/home.php');
				
			}
			
		?>
		
		
		