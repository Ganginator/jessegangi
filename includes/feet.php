	<!-- All JavaScript placed at the end of the document so the pages load faster. Also, index.php contains all links for reference. -->
	<!-- AS ALWAYS, THE ORDER OF THE STACK IS IMPORTANT!!! -->
	
	
	<!-- JavaScript -->
	
	
	<?php include("js.php") ?>
	
	
	<!-- / JavaScript -->
	
	
	<!-- JavaScript Inline -->
	
	
	<!-- Popovers: -->
	
	<script type="text/javascript">
	
		$(document).ready(function(){
		
			$(".po-initialize a").popover({
			
				placement : 'top'
				
			});
			
		});
		
	</script>
	
	
	<!-- Carousel: -->
	<!-- MOVE INTO carousel.js -->
	
	<script>
	
		!function ($) {
		
			$(function(){
			
				$('#myCarousel').carousel()
				
			})
			
		}(window.jQuery)
		
	</script>
	
	
	<!-- Google Analytics: -->
	<!-- Change 'UA-????????-?' to be your site's ID, and '??????????.com' to your site URL. -->
	
	<script>
	
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-41742312-1', 'jessegangi.com');
		ga('send', 'pageview');
		
	</script>
	
	
	<!-- / JavaScript Inline -->
	
	
	