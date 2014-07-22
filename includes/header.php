<!-- ROOT/includes/header.php -->


<!-- CONSIDER MOVING THIS INTO HEAD, MAYBE AS AN INCLUDES? THEN IT CAN BE USED BY ANY CHECKS THROUGHOUT THE PAGE -->
<!-- CHECK IF ?page= IS SET, AND IF SO ASIGN TO $page FOR SETTING .active IN NAV -->
<?php 

	if ( isset ( $_GET [ 'page' ] )) { 
	
		$page = $_GET [ 'page' ]; 
		
	} else {
	
		$page = 'landing';
		
	}
	
?>


<nav class="navbar navbar-default navbar-fixed-top hidden-print" role="navigation">


	<div class="container-fluid">
	
	
		<div class="navbar-header">
		
		
			<!-- SETTING BRAND TO .active NOT WORKING? IS THIS BECAUSE NO <li>? -->
			<a class="navbar-brand"<?php if ( $page == 'landing' ){ echo ' style="color: black;"'; } ?><?php if ( $page == '' ){ echo ' style="color: black;"'; } ?> href="./"><i class="fa fa-umbrella"></i>&nbsp; Jesse Gangi</a>
			
			<!-- #cheeseburger-menu WILL BE POPULATED HERE -->
			
			<!-- The Infamous Hamburger Button -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars fa-lg"></i>
			</button>
			
			
		</div>
		
		
		<div id="cheeseburger-menu" class="collapse navbar-collapse">
		
		
			<ul class="nav navbar-nav">
			
				<li class="hidden-sm<?php if ( $page == 'home'){ echo ' active'; } ?>"><a href="./?page=home"><i class="fa fa-home"></i>&nbsp; Home</a></li>
				
				<li class="dropdown-split-left<?php if ( $page == 'about' || $page == 'about/experience' || $page == 'about/education' || $page == 'about/activities' || $page == 'about/portfolio' ){ echo ' active'; } ?>"><a href="./?page=about"><i class="fa fa-question-circle"></i>&nbsp; About</a></li>
				
				<li class="dropdown dropdown-split-right hidden-xs hidden-sm" style="margin-left: -22px;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-caret-down"></i>
					</a>
					
					<!-- SHOULD BE ABLE TO MOVE .pull-right ? MAYBE DON'T NEED margins -->
					<ul class="dropdown-menu pull-right" style="margin-right: -22px;">
					
						<!-- <li<#?php if ( $page == 'about' || $page == 'about/experience' || $page == 'about/education' || $page == 'about/activities' || $page == 'about/portfolio' ){ echo ' active'; } ?>><a href="./?page=about"><i class="fa fa-question-circle"></i>&nbsp; About</a></li>
						
							<li class="divider"></li> -->
						
						<li<?php if ( $page == 'about/experience' ){ echo ' class="active"'; } ?>><a href="./?page=about/experience"><i class="fa fa-road"></i>&nbsp; Experience</a></li>
						
						<li<?php if ( $page == 'about/education' ){ echo ' class="active"'; } ?>><a href="./?page=about/education"><i class="fa fa-graduation-cap"></i>&nbsp; Education</a></li>
						
						<li<?php if ( $page == 'about/activities' ){ echo ' class="active"'; } ?>><a href="./?page=about/activities"><i class="fa fa-music"></i>&nbsp; Activities</a></li>
						
						<li<?php if ( $page == 'about/portfolio' ){ echo ' class="active"'; } ?>><a href="./?page=about/portfolio"><i class="fa fa-briefcase"></i>&nbsp; Portfolio</a></li>
						
					</ul>
					
				</li>
				
				<li class="dropdown-split-left<?php if ( $page == 'tools' || $page == 'tools/software' || $page == 'tools/frameworks' || $page == 'tools/code' || $page == 'tools/learning' ){ echo ' active'; } ?>"><a href="./?page=tools"><i class="fa fa-wrench"></i>&nbsp; Tools</a></li>
				
				<li class="dropdown dropdown-split-right hidden-xs hidden-sm" style="margin-left: -22px;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-caret-down"></i>
					</a>
					
					<ul class="dropdown-menu pull-right" style="margin-right: -22px;">
					
						<!-- <li<#?php if ( $page == 'tools' || $page == 'tools/software' || $page == 'tools/frameworks' || $page == 'tools/code' || $page == 'tools/learning' ){ echo ' active'; } ?>><a href="./?page=tools"><i class="fa fa-wrench"></i>&nbsp; Tools</a></li>
						
							<li class="divider"></li> -->
						
						<li<?php if ( $page == 'tools/software' ){ echo ' class="active"'; } ?>><a href="./?page=tools/software"><i class="fa fa-laptop"></i>&nbsp; Software</a></li>
						
						<li<?php if ( $page == 'tools/frameworks' ){ echo ' class="active"'; } ?>><a href="./?page=tools/frameworks"><i class="fa fa-building-o"></i>&nbsp; Frameworks</a></li>
						
						<li<?php if ( $page == 'tools/code' ){ echo ' class="active"'; } ?>><a href="./?page=tools/code"><i class="fa fa-code"></i>&nbsp; Code</a></li>
						
						<li<?php if ( $page == 'tools/learning' ){ echo ' class="active"'; } ?>><a href="./?page=tools/learning"><i class="fa fa-book"></i>&nbsp; Learning</a></li>
						
					</ul>
					
				</li>
				
				<li class="dropdown-split-left<?php if ( $page == 'links' ){ echo ' active'; } ?>"><a href="./?page=links"><i class="fa fa-link"></i>&nbsp; Links</a></li>
				
				<li class="dropdown dropdown-split-right hidden-xs hidden-sm" style="margin-left: -22px;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-caret-down"></i>
					</a>
					
					<ul class="dropdown-menu pull-right" style="margin-right: -22px;">
					
						<!-- <li<#?php if ( $page == 'links' ){ echo ' class="active"'; } ?>><a href="./?page=links"><i class="fa fa-link"></i>&nbsp; Links</a></li>
						
							<li class="divider"></li> -->
						
						<li><a href="//linkedin.com/in/jessegangi"><i class="fa fa-linkedin"></i>&nbsp; LinkedIn</a></li>
						
						<li><a href="//github.com/Ganginator"><i class="fa fa-github-alt"></i>&nbsp; GitHub</a></li>
						
						<li><a href="//drupal.org/user/1101028"><i class="fa fa-drupal"></i>&nbsp; Drupal</a></li>
						
						<li><a href="//stackoverflow.com/users/1944528/ganginator"><i class="fa fa-stack-overflow"></i>&nbsp; Stack Overflow</a></li>
						
					</ul>
					
				</li>
				
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				
				<li<?php if ( $page == 'contact' ){ echo ' class="active"'; } ?>><a href="./?page=contact"><i class="fa fa-envelope"></i>&nbsp; Contact</a></li>
				
				<li><a href="./files/documents/resumes/resume_Jesse-Gangi_13-11-07.pdf"><i class="fa fa-file-pdf-o"></i>&nbsp; One Sheet PDF</a></li>
				
			</ul>
			
			
		</div>
		
		
	</div>
	
	
</nav>


