<div class="mobile-menu">
	<div class="mobile-menu-shadow">
		<a href="#" class="close-menu-btn">
			&times;
		</a>
		<a href="<?php echo bloginfo('url'); ?>">
			<img class="mobile-text-logo" src="<?php echo get_template_directory_uri(); ?>/images/wwc-logo.png" />
		</a>
		<div class="mobile-nav-wrap">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>	
		</div>
	</div>
</div>