<div class="navbar-wrapper"><!-- Bootstrap -->


<div class="container"><!-- Bootstrap -->


	<div class="navbar navbar-inverse"><!-- Bootstrap -->
	
	
		<div class="navbar-inner"><!-- Bootstrap -->
		
		
			<!-- pageslide nav button -->
			<!-- DISABLED 
			<a class="btn btn-navbar" href="javascript:$.pageslide({ direction: 'right', href:'#modal' })" data-toggle="collapse" data-target="#modal"> --><!-- Bootstrap REMOVED: style="float: left;" -->
				<!-- <span class="icon-bar"></span> --><!-- .icon-bar Bootstrap / -->
				<!-- <span class="icon-bar"></span> --><!-- .icon-bar Bootstrap / -->
				<!-- <span class="icon-bar"></span> --><!-- .icon-bar Bootstrap / -->
			<!-- </a> --><!-- / .btn .btn-navbar %collapse %#modal Bootstrap -->
			
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><!-- Bootstrap -->
				<span class="icon-bar"></span><!-- .icon-bar Bootstrap / -->
				<span class="icon-bar"></span><!-- .icon-bar Bootstrap / -->
				<span class="icon-bar"></span><!-- .icon-bar Bootstrap / -->
			</a><!-- / .btn .btn-navbar %collapse %.nav-collapse Bootstrap -->
			
			
			<a href="/" class="brand" >Jesse Gangi</a><!-- .brand Bootstrap / -->
			
			
			<div id="fullnav" class="nav-collapse collapse" style=" text-align: center;"><!-- Bootstrap -->
			
			
				<ul class="nav"><!-- Bootstrap -->
				
					<li <?php if ($pagename == 'home'){ echo 'class="active"'; } ?>><a href="?pagename=home"><i class="icon-home icon-white"></i><!-- Font Awesome / -->&nbsp;&nbsp;Home&nbsp; </a></li>
					
					<li class="dropdown <?php if ($pagename == 'about'){ echo 'active'; } ?>"><!-- Bootstrap --><a href="?pagename=about" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-question-sign icon-black"></i><!-- Font Awesome / -->&nbsp;&nbsp;About&nbsp;<b class="caret"></b></a><!-- Bootstrap -->
						
						<ul class="dropdown-menu"><!-- Bootstrap -->
						
							<li <?php if ($pagename == 'about/experience'){ echo 'class="active"'; } ?>><a href="?pagename=about/experience"><i class="icon-road icon-black"></i><!-- Font Awesome / -->&nbsp;&nbsp;Experience&nbsp; </a></li>
							<li <?php if ($pagename == 'about/portfolio'){ echo 'class="active"'; } ?>><a href="?pagename=about/portfolio"><i class="icon-briefcase icon-black"></i><!-- Font Awesome / -->&nbsp;&nbsp;Portfolio&nbsp; </a></li>
							<li <?php if ($pagename == 'about/activities'){ echo 'class="active"'; } ?>><a href="?pagename=about/activities"><i class="icon-music icon-black"></i><!-- Font Awesome / -->&nbsp;&nbsp;Activities&nbsp; </a></li>
							<li <?php if ($pagename == 'about/education'){ echo 'class="active"'; } ?>><a href="?pagename=about/education"><i class="icon-book icon-black"></i><!-- Font Awesome / -->&nbsp;&nbsp;Education&nbsp; </a></li>
							
						</ul><!-- / .dropdown-menu Bootstrap -->
						
					</li><!-- / .dropdown Bootstrap -->
					
					<li class="dropdown <?php if ($pagename == 'tools'){ echo 'active'; } ?>"><a href="?pagename=tools" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-white"></i><!-- Font Awesome / -->&nbsp;&nbsp;Tools <b class="caret"></b>&nbsp; </a><!-- Bootstrap -->
					
						<ul class="dropdown-menu"><!-- Bootstrap -->
						
							<li <?php if ($pagename == 'tools/software'){ echo 'class="active"'; } ?>><a href="?pagename=tools/software"><i class="icon-laptop icon-white"></i>&nbsp;&nbsp;Software</a></li>
							<li <?php if ($pagename == 'tools/code'){ echo 'class="active"'; } ?>><a href="?pagename=tools/code"><i class="icon-file-alt icon-white"></i>&nbsp;&nbsp;Code</a></li>
							<li <?php if ($pagename == 'tools/frameworks'){ echo 'class="active"'; } ?>><a href="?pagename=tools/frameworks"><i class="icon-building icon-white"></i>&nbsp;&nbsp;Frameworks</a></li>
							<!-- <li < ?php if ($pagename == 'tools/hardware'){ echo 'class="active"'; } ?>><a href="?pagename=tools/hardware"><i class="icon-hdd icon-black"></i>&nbsp;&nbsp;Hardware&nbsp; </a></li> -->
							
						</ul><!-- / .dropdown-menu Bootstrap -->
						
					</li><!-- / .dropdown Bootstrap -->
					
				</ul><!-- / .nav Bootstrap -->
				
				<ul class="nav pull-right"><!-- Bootstrap -->
				
					<li class="dropdown <?php if ($pagename == 'links'){ echo 'active'; } ?>"><a href="?pagename=links" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-link icon-white"></i><!-- Font Awesome / -->&nbsp;&nbsp;Links <b class="caret"></b>&nbsp; </a><!-- Bootstrap -->
					
						<ul class="dropdown-menu"><!-- Bootstrap -->
						
							<!-- <li><a href="http://aerialapps.com" target="_blank"><i class="icon-bolt icon-black"></i> --><!-- Font Awesome / --><!-- &nbsp;&nbsp;Aerial Apps.&nbsp; </a></li>
							<li><a href="http://www.cookthekitty.com" target="_blank"><i class="icon-fire icon-black"></i> --><!-- Font Awesome / --><!-- &nbsp;&nbsp;Cook The _____ !&nbsp; </a></li>
							<li><a href="http://twitter.com/ganginator" target="_blank"><i class="icon-twitter icon-black"></i> --><!-- Font Awesome / --><!-- &nbsp;&nbsp;Twitter&nbsp; </a></li> -->
							<li><a href="http://www.linkedin.com/in/jessegangi" target="_blank"><i class="icon-linkedin icon-black"></i><!-- Font Awesome / -->&nbsp;&nbsp;LinkedIn&nbsp; </a></li>
							<li><a href="https://github.com/Ganginator" target="_blank"><i class="icon-github-alt icon-black"></i><!-- Font Awesome / -->&nbsp;&nbsp;Github&nbsp; </a></li>
							
						</ul><!-- / .dropdown-menu Bootstrap -->
						
					</li><!-- / .dropdown Bootstrap -->
					
						<li class="divider"></li>
						<!-- <li class="nav-header">Nav header</li> -->
						
					<!-- <li class="dropdown"><a href="?pagename=tools" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-white"></i> --><!-- Font Awesome / --><!-- &nbsp;&nbsp;Tools <b class="caret"></b>&nbsp; </a> --><!-- Bootstrap -->
					
						<!-- <ul class="dropdown-menu"><!-- Bootstrap -->
						
							<!-- <li><a href="#" id="info" rel="clickover" class=""><i class="icon-info icon-black"></i> --><!-- Font Awesome / --><!-- &nbsp;&nbsp;Info&nbsp;&nbsp;</a></li>
							
						</ul> --><!-- / .dropdown-menu Bootstrap --><!-- 
						
					</li> --><!-- / .dropdown Bootstrap -->
					
					<li <?php if ($pagename == 'contact'){ echo 'class="active"'; } ?>><a href="?pagename=contact"><i class="icon-envelope-alt icon-white"></i><!-- Font Awesome / -->&nbsp;&nbsp;Contact&nbsp; </a></li>
					<li><a href="http://aerialapps.com/files/documents/resumes/resume_Jesse-Gangi_13-11-07.pdf" target="_blank"><i class="icon-download-alt icon-white"></i><!-- Font Awesome / -->&nbsp;&nbsp;One Sheet PDF</a></li>
					
				</ul><!-- / .nav .pull-right Bootstrap -->
				
				
				<!-- DISABLED search AS IT'S NOT NEEDED  
				<form class="navbar-search pull-right" style="margin: 5px 0 -10px 0;">
					<input id="focusedInput" type="text" class="search-query" placeholder="Search"><i class="icon-search"></i>
				</form>
				-->
				
				
			</div><!-- / #fullnav .nav-collapse .collapse -->
			
			
			<!-- DISABLE: USED FOR pageslide -->
			<div id="modal" class="navbar navbar-inverse" style="display: none; text-align: center;">
			
			
				<a href="/" class="brand">Jesse Gangi</a>
				
				
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="/"><i class="icon-home icon-white"></i>&nbsp;&nbsp;Home</a></li>
					<li><a href="?pagename=contact"><i class="icon-envelope icon-white"></i>&nbsp;&nbsp;Contact</a></li>
					<li class="dropdown">
						<a href="?pagename=about" class="dropdown-toggle" data-toggle="dropdown">&nbsp;&nbsp;About <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="?pagename=about/experience"><i class="icon-certificate icon-black"></i>&nbsp;&nbsp;Experience</a></li>
							<li><a href="?pagename=about/portfolio"><i class="icon-briefcase icon-black"></i>&nbsp;&nbsp;Portfolio</a></li>
							<li><a href="?pagename=about/activities"><i class="icon-star-empty icon-black"></i>&nbsp;&nbsp;Activities</a></li>
							<li><a href="?pagename=about/education"><i class="icon-eye-open icon-black"></i>&nbsp;&nbsp;Education</a></li>
						</ul><!-- / .dropdown-menu -->
					</li><!-- / .dropdown -->
					<li class="dropdown">
						<a href="?pagename=links" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-link icon-white"></i>&nbsp;&nbsp;Links <b class="caret"></b>&nbsp; </a>
						<ul class="dropdown-menu"><!-- 
							<li><a href="http://aerialapps.com" target="_blank"><i class="icon-bolt icon-black"></i>&nbsp;&nbsp;Aerial Apps.&nbsp; </a></li>
							<li><a href="http://www.cookthekitty.com" target="_blank"><i class="icon-fire icon-black"></i>&nbsp;&nbsp;Cook The _____ !&nbsp; </a></li>
							<li><a href="http://twitter.com/ganginator" target="_blank"><i class="icon-twitter icon-black"></i>&nbsp;&nbsp;Twitter&nbsp; </a></li> -->
							<li><a href="http://www.linkedin.com/pub/jesse-gangi/20/244/b14" target="_blank"><i class="icon-linkedin icon-black"></i>&nbsp;&nbsp;LinkedIn&nbsp; </a></li>
							<li><a href="https://github.com/Ganginator" target="_blank"><i class="icon-github-alt icon-black"></i>&nbsp;&nbsp;Github&nbsp; </a></li>
						</ul><!-- / .dropdown-menu -->
					</li><!-- / .dropdown -->
					<li class="dropdown">
						<a href="?pagename=tools" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-white"></i>&nbsp;&nbsp;Tools <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="?pagename=tools/software"><i class="icon-laptop icon-white"></i>&nbsp;&nbsp;Software</a></li>
							<li><a href="?pagename=tools/code"><i class="icon-file-alt icon-white"></i>&nbsp;&nbsp;Code</a></li>
							<li><a href="?pagename=tools/frameworks"><i class="icon-building icon-white"></i>&nbsp;&nbsp;Frameworks</a></li>
							<!-- <li><a href="?pagename=tools/hardware"><i class="icon-hdd icon-white"></i>&nbsp;&nbsp;Hardware</a></li> -->
						</ul><!-- / .dropdown-menu -->
					</li><!-- / .dropdown -->
						<li class="divider"></li>
					<li><a href="?pagename=contact"><i class="icon-envelope-alt icon-white"></i>&nbsp;&nbsp;Contact&nbsp; </a></li>
					<li><a href="http://aerialapps.com/files/documents/resumes/resume_Jesse-Gangi_13-05-09.pdf" target="_blank" title="PDF"><i class="icon-download-alt icon-white"></i>&nbsp;&nbsp;One Sheet</a></li>
						<li class="divider"></li>
					<li><a class="nav nav-pills nav-stacked" href="javascript:$.pageslide.close()"><i class="icon-x icon-white"></i>&nbsp;&nbsp;Close</a></li>
				</ul><!-- / .nav .nav-pills .nav-stacked -->
				
				
				<!-- DISABLED search AS IT'S NOT NEEDED 
				<form class="navbar-search pull-right" style="margin: 5px 0 -10px 0;"> --><!-- Bootstrap -->
					<!-- <input id="focusedInput" type="text" class="search-query" placeholder="Search"><i class="icon-search"></i> --><!-- Font Awesome / -->
				<!-- </form> --><!-- Bootstrap -->
				
				
			</div><!-- / #modal .navbar .navbar-inverse Bootstrap -->
			
			
		</div><!-- / .navbar-inner Bootstrap -->
		
		
	</div><!-- / .navbar .navbar-inverse .navbar-fixed-top Bootstrap -->
	
	
</div><!-- / .container Bootstrap -->


</div><!-- / .navbar-wrapper Bootstrap -->