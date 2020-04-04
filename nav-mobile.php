
<nav id="nav-wrap" style="background: #000; background-image: url(<?php echo get_template_directory_uri(); ?>/images/menu_bkg.jpg); background-size: cover; background-position: top;">

	<div id="mobile-header">		
			
		<div class="mobile-top-header" style="position: relative;">

			<!-- Logo here -->
			<a href="<?php echo bloginfo('url'); ?>">
				<img class="mobile-text-logo" src="<?php echo get_template_directory_uri(); ?>/images/tw-white-logo-circle.png" />
			</a>

			<div class="close-menu" style="position: absolute; top: 0%;  right: 10px; cursor: pointer; font-size: 3.8em; color: #fff; z-index: 99">&times;
			</div>


		</div>

	</div>

	<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>

	<div class="social-wrap-mobile-nav">
		<?php get_template_part('social'); ?>
	</div>

</nav>