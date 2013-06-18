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
		$layoutquery = mysql_query("SELECT * FROM $layouttable WHERE pagename = '$pagename'");
		
		// FETCH THE RESULTS THEN CONVERT THEM INTO AN ARRAY
		
		// WHILE THIS IS HAPPENING...
		WHILE($rows = mysql_fetch_array($layoutquery)):
		
			// DO THIS.
			$id = $rows['id'];
			$pagename = $rows['pagename'];
			$title = $rows['title'];
			$code = $rows['code'];
			
			// echo "$code";
			eval('?>' . $code . '<?php ');
			
		endwhile;
		
	?>