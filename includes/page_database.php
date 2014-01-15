	<!-- ADD ERRORS FOR THESE -->
	
	
	<?php
		
		// GET AND ASIGN THE pagename
		if(isset($_GET['pagename']))
		{
			$pagename = $_GET['pagename'];
		} else {
			$pagename = "home";
		}
		
		// QUERY THE DATABASE
		$pagequery = mysql_query("SELECT * FROM $pagetable WHERE pagename = '$pagename'");
		
		// FETCH THE RESULTS THEN CONVERT THEM INTO AN ARRAY
		
		// WHILE THIS IS HAPPENING...
		WHILE($rows = mysql_fetch_array($pagequery)):
		
			// DO THIS.
			$id = $rows['id'];
			$pagename = $rows['pagename'];
			$title = $rows['title'];
			$copy = $rows['copy'];
			
			// OLD ECHO 
			// echo "<h1>$title</h1><p style='text-align: left; text-indent: 15pt;'>$copy</p><hr />";
			
			// echo $copy;
			eval('?>' . $copy . '<?php ');
			
		endwhile;
		
	?>