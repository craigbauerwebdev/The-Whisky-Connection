<?php
/* 
Template Name: Month Club Template
*/
?>

<?php get_header(); 
	
 	if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<div class="main-content-wrap outter-content-wrap front-page">
			<div class="slider-shadow"></div>

			<div class="desktop" style="max-width: 1420px; margin: 0 auto;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/monthClubBannerDesktop.jpg" width="100%" />
			</div>
			<div class="mobile" style="max-width: 1420px; margin: 0 auto;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/monthClubBanner.jpg" width="100%" />
			</div>
			<div class="max-width inner-content-wrap padding">
				
				<?php 
				
				if ( is_user_logged_in() ) { 
					$current_user = wp_get_current_user();?>
					<h1 class="inner-page-title">Welcome <?php echo $current_user->display_name; ?></h1>
					<br />
					<h2>Your Recommendations</h2>
					<p>Your recommendations will appear here... 1st recommendations come out December 1st.</p>
				<?php } else { ?> 
					<h1 class="inner-page-title">Join Now. It's FREE!</h1>
					<p>Already a member? <a href="/login">Sign In</a></p>
					<h2>Here is how it works:</h2>
					<br />
					<h2>1. Register</h2>
					<br />
					<div>
						<?php echo do_shortcode('[wppb-register]');?>
					</div>
					<br />
					<h2>2. Check Your Email.</h2>
					<p>Create your password and confirm your email subscription. If you opt out of the emails you can still see your recommendations here when you login.</p>
					<h2>3. Enjoy</h2> 
					<p>You will receive your whisk(e)y recommendations in your inbox. Enjoy member only content when you log into the Wee Whisky Connection.</p>
				<?php }
				
				//the_content(); ?>		
			</div>
		</div>

	<?php endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php endif; ?>
	    

<?php get_footer(); ?>