<?php
/* 
Template Name: Favorites Template
*/
?>

<?php get_header(); 
	
 	if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<div class="main-content-wrap outter-content-wrap front-page">
			<div class="slider-shadow"></div>

			
			<div class="max-width inner-content-wrap padding">
				
				<?php 
				
				if ( is_user_logged_in() ) { ?> 
					<h1 class="inner-page-title"><h1>Favorites</h1>
					<br />
					<!-- <p>Display Name: Get Name!</p>
					<p>Member Since: February 2106</p>
					<h2>Favorites</h2> -->
					<?php echo do_shortcode('[user_favorites include_thumbnails="true"]');
					echo do_shortcode('[clear_favorites_button]');
				} else { ?> 
					<h1 class="inner-page-title"><h1>Favorites</h1>
					<!-- <h2>Favorites</h2> -->
					<p>Please Login to use favorites. You can save your favorite Whiskies to view them later.</p>
					<p><a href="/login">Sign In</a></p> 
				<?php }
				
				the_content(); ?>		
			</div>
		</div>

	<?php endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php endif; ?>
	    

<?php get_footer(); ?>