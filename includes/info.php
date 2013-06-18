	<!-- DISABLED - WAS ORIGINALLY USED FOR TESTING 
	< ?php if ($pagename == ''){ echo '<h4>Default Home if nothing is selected!</h4>'; } ?>
	< ?php if ($pagename == 'home'){ echo '<h4>Home!!</h4>'; } ?>
	< ?php if ($pagename == 'about'){ echo '<h4>About!!!</h4>'; } ?>
	< ?php if ($pagename == 'contact'){ echo '<h4>Contact!!!!</h4>'; } ?>
	< ?php if ($pagename == 'elements'){ echo '<h4>Elements!!!!!</h4>'; } ?>
	< ?php if ($pagename == 'two-column-left'){ echo '<h4>Two Column Left!!!!!!</h4>'; } ?>
	< ?php if ($pagename == 'two-column-right'){ echo '<h4>Two Column Right!!!!!!!</h4>'; } ?>
	< ?php if ($pagename == 'products'){ echo '<h4>Products!!!!!!!!</h4>'; } ?>
	< ?php if ($pagename == 'services'){ echo '<h4>Services!!!!!!!!!</h4>'; } ?>
	< ?php if ($pagename == 'portfolio'){ echo '<h4>Portfolio!!!!!!!!!!</h4>'; } ?>
	-->
	
	
	<?php
	
		echo "<h2>. - : Information : - .</h2>";
		echo "<h1>This is your Title:<br />$title</h1>";
		
	?>
	
	
	<?php
	
		echo "<strong>Today is:</strong> ";
		echo( date("l, F jS Y") );
		
	?><br />
	
	
	<?php
	
		echo "<strong>The current Page is:</strong> $pagename";
		
	?><br />
	
	
	<?php
	
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
		if (!empty($_SERVER["QUERY_STRING"]))
		$url .= "?".$_SERVER['QUERY_STRING'];
		echo "<strong>The current URL is:</strong> $url";
		
	?><br />
	<br />
	<br />