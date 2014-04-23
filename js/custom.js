/*** Custom JavaScript ***/


/*
'html: true,' IT SEEMS THIS IS UNECESSARY?
trigger: 'hover' /* THIS WAS ALL I NEEDED FOR HOVERING AT FIRST */
*/


/* CHANGE .class ON hover */

jQuery(document).ready(function($){

	$('.fa').hover(
	
		function(){ $(this).addClass('fa-inverse') },
		function(){ $(this).removeClass('fa-inverse') }
		
	)
	
});


/*
<script> jQuery(document).ready(function($){ $('.fa').hover( function(){ $(this).addClass('fa-inverse') }, function(){ $(this).removeClass('fa-inverse') } ) }); </script>
*/


/** Bootstrap Popovers **/


/* Information */

$("#po-information").popover({

	html: true, 
	placement: 'bottom', 
	trigger: 'hover' 
	
	title: '<div style="text-align: center;"><h3>Information</h3></div>', 
	
	content: '<div style="text-align: center;"><br />Coming soon.</div><br />', 
	
});


/* MORE SETTINGS */

/* allow_multiple: false, */
/* auto_close: 10 * 1000, */


/** / Bootstrap Popovers **/


/*** / Custom JavaScript ***/


