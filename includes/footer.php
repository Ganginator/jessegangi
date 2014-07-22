		<!-- ROOT/includes/footer.php -->
		
		
		<div class="container margin-top">
		
		
			<ul class="breadcrumb po-initialize"><!-- .list-inline -->
			
				<li><a href="?page=home"<?php if ( $page == 'home' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-home" title="Home"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=about"<?php if ( $page == 'about' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-question-circle" title="About"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=about/experience"<?php if ( $page == 'about/experience' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-road" title="Experience"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=about/education"<?php if ( $page == 'about/education' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-graduation-cap" title="Education"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=about/activities"<?php if ( $page == 'about/activities' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-music" title="Activities"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=about/portfolio"<?php if ( $page == 'about/portfolio' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-briefcase" title="Portfolio"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=tools"<?php if ( $page == 'tools' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-wrench" title="Tools"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=tools/software"<?php if ( $page == 'tools/software' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-laptop" title="Software"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=tools/frameworks"<?php if ( $page == 'tools/frameworks' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-building-o" title="Frameworks"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=tools/code"<?php if ( $page == 'tools/code' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-code" title="Code"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=tools/learning"<?php if ( $page == 'tools/learning' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-book" title="Learning"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=links"<?php if ( $page == 'links' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-link" title="Links"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="http://www.linkedin.com/pub/jesse-gangi/20/244/b14"><i class="fa fa-linkedin" title="LinkedIn"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="https://github.com/Ganginator"><i class="fa fa-github-alt" title="GitHub"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="https://drupal.org/user/1101028"><i class="fa fa-drupal" title="Drupal"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="http://stackoverflow.com/users/1944528/ganginator"><i class="fa fa-stack-overflow" title="Stack Overflow"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="?page=contact"<?php if ( $page == 'contact' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-envelope" title="Contact"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<!-- <li><a href="?page=privacy"<#?php if ( $page == 'privacy' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-file-pdf-o" title="Privacy"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp; -->
				
				<!-- <li><a href="?page=terms"<#?php if ( $page == 'terms' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-file-pdf-o" title="Terms"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp; -->
				
				<li><a href="http://jessegangi.com/files/documents/resumes/resume_Jesse-Gangi_13-11-07.pdf" target="_blank"><i class="fa fa-file-pdf-o" title="One Sheet PDF"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<li><a href="#"><strong><i class="fa fa-#" title="Go Back to the Top!">#</i></strong></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp;
				
				<!-- <li><a href="#" id="bookmarker" rel="sidebar"><i class="fa fa-bookmark" title="Bookmark this Page!"></i></a></li>
				&nbsp;<span class="divider">&raquo;</span>&nbsp; -->
				
				<li><a href="#" id="co-information" rel="clickover"<?php if ( $page == 'information' ){ echo ' style="color: red;"'; } ?>><i class="fa fa-info-circle" title="Information"></i></a></li>
				
			</ul><!-- / .breadcrumb -->
			
			
		</div><!-- / .container .margin-top -->
		
		
		<div id="credit" style="margin-left: 40px;">
		
		
			<small class="muted credit">
			
			
				<!-- MOVE THIS INTO ITS OWN FILE -->
				<!-- SIMPLE JAVASCRIPT DATE MACHINE? -->
				
				<script>
				
				
					var today = new Date(); 
					var dd = today.getDate(); 
					var mm = today.getMonth() + 1 ; //January is 0! 
					var yyyy = today.getFullYear(); 
					
					
					if ( dd < 10 ) { 
					
						dd = '0' + dd 
						
					} 
					
					if ( mm < 10 ) { 
					
						mm = '0' + mm 
						
					} 
					
					
					today = mm + '/' + dd + '/' + yyyy ; 
					
					/* document.write ( today ); */ 
					
					
				</script>
				
				
				Copyright &copy; 2012 to <script> document.write ( yyyy ); </script> <!-- 2014 -->Jesse Gangi. <!-- All Rights Reserved. -->
				
				
			</small><!-- / .muted .credit -->
			
			
		</div><!-- / #credit -->
		
		
		