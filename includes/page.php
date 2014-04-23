		<!-- EXPLODING FOR CLEAN URLS PER:
		http://forum.codecall.net/topic/74170-clean-urls-with-php/ -->
		<?php 
		
			function parse_path() {
			
				$path = array();
				
				if (isset($_SERVER['REQUEST_URI'])) {
				$request_path = explode('?', $_SERVER['REQUEST_URI']);
				
				$path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
				$path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
				$path['call'] = utf8_decode($path['call_utf8']);
				
				if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
				
					$path['call'] = '';
					
				}
				
				$path['call_parts'] = explode('/', $path['call']);
				
				$path['query_utf8'] = urldecode($request_path[1]);
				$path['query'] = utf8_decode(urldecode($request_path[1]));
				
				$vars = explode('&', $path['query']);
				
				foreach ($vars as $var) {
				
					$t = explode('=', $var);
					$path['query_vars'][$t[0]] = $t[1];
					
					}
					
				}
				
				return $path;
				
			}
			
			$path_info = parse_path();
			
			/* echo '<pre>'.print_r($path_info, true).'</pre>'; */
			
		?>
		
		
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
					
					case 'about/':
						echo ('<h1 class="title-page">Would You Like to Know More?</h1>');
						include('includes/content/about.php');
						break;
						
						/* About Pages */
						
						case 'about/experience':
							echo ('<h1 class="title-page">Professional history.</h1>');
							include('includes/content/experience.php');
							break;
							
						case 'about/education':
							echo ('<h1 class="title-page">Knowledge; not including Google.</h1>');
							include('includes/content/education.php');
							break;
							
							/* Education Pages */
							
							case 'about/education/learning':
								echo ('<h1 class="title-page"></h1>');
								include('includes/content/learning.php');
								break;
								
							/* / Education Pages */
							
						case 'about/activities':
							echo ('<h1 class="title-page">The other things.</h1>');
							include('includes/content/activities.php');
							break;
							
						case 'about/portfolio':
							echo ('<h1 class="title-page">Examples of work, and contributions.</h1>');
							include('includes/content/portfolio.php');
							break;
							
						/* / About Pages */
					
					case 'tools':
						echo ('<h1 class="title-page">Things that make my life easier.</h1>');
						include('includes/content/tools.php');
						break;
						
					case 'tools/':
						echo ('<h1 class="title-page">Things that make my life easier.</h1>');
						include('includes/content/tools.php');
						break;
						
						/* Tools Pages */
						
						/* TESTING EXPLOSIONS - Software */
						
						case 'tools/software':
							echo ('<h1 class="title-page">Things that make life easier.</h1>');
							include('includes/content/software.php');
							break;
							
						case '?page=tools/software':
							echo ('<h1 class="title-page">Things that make life easier.</h1>');
							include('includes/content/software.php');
							break;
							
						case 'index.phptools/software':
							echo ('<h1 class="title-page">Things that make life easier.</h1>');
							include('includes/content/software.php');
							break;
							
						case 'index.php/tools/software':
							echo ('<h1 class="title-page">Things that make life easier.</h1>');
							include('includes/content/software.php');
							break;
							
						case 'index.php?page=tools/software':
							echo ('<h1 class="title-page">Things that make life easier.</h1>');
							include('includes/content/software.php');
							break;
						
						/* TESTING EXPLOSIONS - Software */
						
						case 'tools/frameworks':
							echo ('<h1 class="title-page">Scafolding, to build with.</h1>');
							include('includes/content/frameworks.php');
							break;
							
						case 'tools/code':
							echo ('<h1 class="title-page">Programming languages.</h1>');
							include('includes/content/code.php');
							break;
							
						case 'tools/learning':
							echo ('<h1 class="title-page">Always a student, always learning.</h1>');
							include('includes/content/learning.php');
							break;
							
						case 'tools/hardware':
							echo ('<h1 class="title-page">Machines, Components, and Toys.</h1>');
							include('includes/content/hardware.php');
							break;
							
							
						/* / Tools Pages */
					
					case 'links':
						echo ('<h1 class="title-page">External pages.</h1>');
						include('includes/content/links.php');
						break;
						
					case 'links/':
						echo ('<h1 class="title-page">External pages.</h1>');
						include('includes/content/links.php');
						break;
						
					case 'contact':
						echo ('<h1 class="title-page">Making connections.</h1>');
						include('includes/content/contact.php');
						break;
						
					case 'contact/':
						echo ('<h1 class="title-page">Making connections.</h1>');
						include('includes/content/contact.php');
						break;
						
					case 'information':
						echo ('<h1 class="title-page">"Knowledge is Power!"</h1>');
						include('includes/content/information.php');
						break;
						
					case 'information/':
						echo ('<h1 class="title-page">"Knowledge is Power!"</h1>');
						include('includes/content/information.php');
						break;
						
					case 'math':
						echo ('<h1 class="title-page">"It\'s all about the percent."</h1>');
						include('includes/math.php');
						break;
						
					case 'math/':
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
		
		
		