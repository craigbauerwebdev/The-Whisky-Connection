<?php get_header(); ?>

	<div class="main-content-wrap outter-content-wrap page">
		<div class="slider-shadow"></div>

		<div class="adnxs-desktop">
			<center>
				<div id="ga_17755898"> </div>
			</center><br>
		</div>
		<div class="adnxs-mobile">
			<center><div id="ga_17756166"></div></center><br>
		</div>
	
 	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		
			<div class="max-width inner-content-wrap padding">
				<h1 class="inner-page-title"><?php the_title(); ?></h1>
				<?php 
				if(is_page('society')) { ?>	
					<?php if ( is_user_logged_in() ) { ?> 
						<h2>Favorites</h2>
						<?php echo do_shortcode('[user_favorites include_thumbnails="true"]');
						echo do_shortcode('[clear_favorites_button]');
					} else { ?> <p>Please Login to use favorites. You can save your favorite Whiskies to view them later. <?php }
				}
				if(is_page('how-it-works')) { ?>	

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

					<div class="hiw-icon">
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/signup.png" />
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="hiw-icon">
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/discover.png" />
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="hiw-icon">
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/locate.png" />
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>

				<?php }
				the_content(); ?>		
			</div>
		</div>

	<?php endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php endif; ?>
	    

<?php get_footer(); ?>