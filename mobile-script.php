	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript">
		$.noConflict();
		jQuery(document).ready(function($){

			/* prepend menu icon */
			$('#nav-wrap').prepend('<div id="menu-icon">Menu</div>');
			
			/* toggle nav */
			$("#menu-icon").on("click", function(){
				$("#m-nav").slideToggle();
				$(this).toggleClass("active");
			});

		});
	</script>