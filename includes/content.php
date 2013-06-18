	
	
	<?php
		
		// GET AND ASIGN THE pagename
		if(isset($_GET['pagename']))
		{
			$pagename = $_GET['pagename'];
		} else {
			$pagename = "home";
		}
		
		// QUERY THE DATABASE
		$query = mysql_query("SELECT * FROM $tablename WHERE pagename = '$pagename'");
		
		echo "<h3 style='text-decoration: underline;'>This is your Database Page Content:</h3><br /><hr />";
		
		// FETCH THE RESULTS THEN CONVERT THEM INTO AN ARRAY
		
		// WHILE THIS IS HAPPENING...
		WHILE($rows = mysql_fetch_array($query)):
		
			// DO THIS.
			$id = $rows['id'];
			$pagename = $rows['pagename'];
			$title = $rows['title'];
			$copy = $rows['copy'];
			
			echo "<h3>$title</h3><p style='text-align: left; text-indent: 15pt;'>$copy</p><hr />";
			
			include_once("includes/switch.php");
			
		endwhile;
		
	?>
	
	