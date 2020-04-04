<?php
/* 
Template Name: Search Template
*/
?>

<?php get_header(); ?>

	<div class="main-content-wrap outter-content-wrap group">
		<div class="slider-shadow"></div>

		<div class="adnxs-desktop">
			<center>
				<div id="ga_17755898"></div>
			</center><br>
		</div>
		<div class="adnxs-mobile">
			<center><div id="ga_17756166"></div></center><br>
		</div>

		<div class="max-width inner-content-wrap padding">
			<h1><?php the_title(); ?></h1>

			<div class="grid-wrap max-width group">	
				<div id="search-widget" class="group">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Search Page') ) : ?> 
			     	<?php endif; ?> 
			     	<div style="clear: both;"></div>
		     	</div> 
			</div>
		</div>
	</div>

<?php get_footer(); ?>