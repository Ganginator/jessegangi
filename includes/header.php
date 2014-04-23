	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		
		
			<div class="navbar-header">
			
			
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-header-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" href="/">Jesse Gangi</a>
				
				
			</div><!-- / .navbar-header -->
			
			
			<div id="navbar-header-collapse" class="navbar-collapse collapse">
			
			
				<ul class="nav navbar-nav">
				
					<li <?php if ($page == 'home'){ echo 'class="active"'; } ?>><a href="?page=home"><i class="fa fa-home fa-inverse"></i>&nbsp;&nbsp;Home&nbsp; </a></li>
					
					<!-- FROM aerialapps.com FOR FIXING active class
					<li class="dropdown <#!?php if ($pagename == 'about'){ echo 'active'; } ?>"><a href="?pagename=about" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-question-sign icon-black"></i>&nbsp;&nbsp;About&nbsp;<b class="caret"></b></a>
					-->
					
					<!-- 
					<#!?php if($url === $activePage):?>class="active"<#!?php endif;?>
					<#!?php if($url === $activePage):?> active<#!?php endif;?>
					-->
					
					<li class="dropdown<?php if ($pagename == 'about'){ echo 'active green'; } ?>"><a href="?page=about" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-question-circle fa-inverse"></i>&nbsp;&nbsp;About&nbsp; <b class="caret"></b></a>
						
						<ul class="dropdown-menu">
						
							<li <?php if ($page == 'about/experience'){ echo 'class="active"'; } ?>><a href="?page=about/experience"><i class="fa fa-road"></i>&nbsp;&nbsp;Experience&nbsp; </a></li>
							
							<!-- DISABLED dropdown-submenu -->
							<li class="<?php if ($page == 'about/education'){ echo ' active'; } ?>">
								<a href="?page=about/education"><i class="fa fa-book"></i>&nbsp;&nbsp;Education&nbsp; </a>
								
								<!-- DISABLED
								<ul class="dropdown-menu">
								
									<li><a href="?page=about/education/learning"><i class="fa fa-book"></i>&nbsp;&nbsp;Learning&nbsp; </a></li>
									
								</ul>
								-->
								
							</li>
							
							<li <?php if ($page == 'about/activities'){ echo 'class="active"'; } ?>><a href="?page=about/activities"><i class="fa fa-music"></i>&nbsp;&nbsp;Activities&nbsp; </a></li>
							<li <?php if ($page == 'about/portfolio'){ echo 'class="active"'; } ?>><a href="?page=about/portfolio"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;Portfolio&nbsp; </a></li>
							
						</ul><!-- / .dropdown-menu -->
						
					</li><!-- / .dropdown -->
					
					<li class="dropdown <?php if ($page == 'tools'){ echo 'active'; } ?>"><a href="?page=tools" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench fa-inverse"></i>&nbsp;&nbsp;Tools&nbsp; <b class="caret"></b></a>
						
						<ul class="dropdown-menu">
						
							<li <?php if ($page == 'tools/software'){ echo 'class="active"'; } ?>><a href="?page=tools/software"><i class="fa fa-laptop"></i>&nbsp;&nbsp;Software</a></li>
							<li <?php if ($page == 'tools/frameworks'){ echo 'class="active"'; } ?>><a href="?page=tools/frameworks"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Frameworks</a></li>
							<li <?php if ($page == 'tools/code'){ echo 'class="active"'; } ?>><a href="?page=tools/code"><i class="fa fa-code"></i>&nbsp;&nbsp;Code</a></li>
							<li <?php if ($page == 'tools/learning'){ echo 'class="active"'; } ?>><a href="?page=tools/learning"><i class="fa fa-book"></i>&nbsp;&nbsp;Learning&nbsp; </a></li>
							
							
						</ul><!-- / .dropdown-menu -->
						
					</li><!-- / .dropdown -->
					
				</ul><!-- / .nav .navbar-nav -->
				
				
				<ul class="nav navbar-nav navbar-right">
				
					<li class="dropdown <?php if ($page == 'links'){ echo 'active'; } ?>"><a href="?page=links" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-link fa-inverse"></i>&nbsp;&nbsp;Links&nbsp; <b class="caret"></b></a>
						
						<ul class="dropdown-menu">
						
							<li><a href="http://www.linkedin.com/in/jessegangi"><i class="fa fa-linkedin"></i>&nbsp;&nbsp;LinkedIn&nbsp; </a></li>
							<li><a href="https://github.com/Ganginator"><i class="fa fa-github-alt"></i>&nbsp;&nbsp;GitHub&nbsp; </a></li>
							<li><a href="https://drupal.org/user/1101028"><i class="fa fa-link"></i>&nbsp;&nbsp;Drupal&nbsp; </a></li>
							<li><a href="http://stackoverflow.com/users/1944528/ganginator"><i class="fa fa-link"></i>&nbsp;&nbsp;Stack Overflow&nbsp; </a></li>
							
						</ul><!-- / .dropdown-menu -->
						
					</li><!-- / .dropdown -->
					
					<li <?php if ($page == 'contact'){ echo 'class="active"'; } ?>><a href="?page=contact"><i class="fa fa-envelope fa-inverse"></i>&nbsp;&nbsp;Contact&nbsp; </a></li>
					<li><a href="http://jessegangi.com/files/documents/resumes/resume_Jesse-Gangi_13-11-07.pdf" target="_blank"><i class="fa fa-download fa-inverse"></i>&nbsp;&nbsp;One Sheet PDF&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
					
				</ul><!-- / .nav .navbar-nav .navbar-right -->
				
				
			</div><!-- / #navbar-header-collapse .navbar-collapse .collapse -->
		
		
	</nav><!-- / .navbar .navbar-inverse .navbar-static-top *navigation -->