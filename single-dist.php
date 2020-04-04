

<?php get_header(); ?>

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); 

	//$dist_products = the_field( 'brand_name' );

	if ( has_post_thumbnail() ) {
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	} else {

		$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
	}
	?>

	<div class="single-menu-bar" style="color: #fff; text-align: center; margin: 0 auto;">
		<ul class="max-width">
			
			<a class="description-button" href="#"><li>Description</li></a>
			<?php if ( get_field( 'show_map' ) == 1 ) { ?>
				<a class="dist-map-button" href="#"><li>Map</li></a>
			<?php } ?>
			<?php if ( get_field( 'show_dist_images' ) == 1 ) { ?>
				<a class="dist-img-button" href="#"><li>Pictures</li></a>
			<?php } ?>
			<a class="whisky-button" href="#"><li>Whiskies</li></a>
		</ul>
	</div>

	<div class="main-content-wrap outter-content-wrap single-product-page">

		<div class="slider-shadow"></div>

		<div class="adnxs-desktop">
			<center>
				<div id="ga_17755898"> </div>
			</center><br>
		</div>
		<div class="adnxs-mobile">
			<center><div id="ga_17756166"></div></center><br>
		</div>
		

		<!-- <div style="margin-bottom: 10px;">
		    <div id="top-header-sponsor-desktop" class="desktop" style="max-width: 728px; width: 100%; margin: 0 auto; text-align: center;">
		    </div>
		</div> -->

		<div class="max-width" style="position: relative">

			<div class="single-product-wrap relative group">
				<a class="back-to-distilleries" href="/distilleries">&#8592; back to distilleries</a>
				<div class="main-dist-image relative" style="background: url(<?php echo $featured_img_url ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
					<div class="absolute" style="top: 0; right: 0; bottom: 0; left: 0; background: rgba(0, 0, 0, .4);">
						<img class="absolute" style="max-height: 150px; max-width: 280px; top:50%; left: 50%; transform: translate(-50%, -50%);" src="<?php the_field('logo_img'); ?>" />	
					</div>
						
				</div>
			</div>
			<div id="single-description" class="single-section-header dist-desc-section center">
					Description
			</div>
			<div class="single-section-content dist-desc">
				<div class="single-section-text single-description">
					<?php the_content(); ?>
				</div>
			</div>

			<?php if ( get_field( 'show_map' ) == 1 ) { ?>
				<div class="single-section-header dist-map-section center">
						Map
				</div>
				<div class="single-section-content dist-map" style="height: 350px;">
						<?php the_field( 'map' ); ?>
				</div>
			<?php } ?>


			<?php if ( get_field( 'show_dist_images' ) == 1 ) { ?>
				<div class="single-section-header dist-desc-section dist-img-section center">
						Pictures of <?php the_title(); ?>
				</div>
				<div class="single-section-content dist-desc">
					<div class="single-section-text single-description">
						<?php the_field( 'distillery_images' ); ?>
					</div>
				</div>
			<?php } ?>

			<?php if ( get_field( 'show_products' ) == 1 ) { ?>

			<div id="dist-whiskies" class="single-section-header dist-desc-section center">
				Whiskies
			</div>
			<div class="single-section-content dist-desc">
				<div class="single-section-text single-description">
				<?php

					//$counter = 0;

					$args = array(
						'post_type' => 'products',
						'tax_query' => array(
							array(
								'taxonomy' => 'brand',
								'field' => 'slug',
								'terms' => get_field( 'brand_name' )
							)
						)
					);
					 
					$the_query = new WP_Query( $args );


					if ( $the_query->have_posts() ) {
						echo '<div class="group">';
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						
							echo // move to scss and make responsive
							'<a href="'.get_permalink().'">
								<div class="related-product center">
								    <img src="'. get_the_post_thumbnail_url(get_the_ID(),'full').'" />
								    <h2>'.get_the_title().'</h2>
								</div>
							</a>';
							/*$counter = $counter + 1;
							if( $counter === 4 || $counter === 8 ) { ?>
								<div style="clear: both; height: 20px; background: red;"></div>
							<?php }*/
						}
						echo '</div>';
					} else {
						echo 'Sorry, there are currently no whiskies for this distillery :(';
					}
					wp_reset_postdata();
					?>
				</div>
			</div>

		<?php } ?>

		</div>

		<center><div id="ga_17756080"> </div></center><br>

	</div>

<?php endwhile; else: ?>
	<p>There are no posts available.</p>
<?php endif; ?>

<?php get_footer(); ?>