<?php get_header(); ?>
	
	<?php

		/*$args = array(
				'post_type' => 'products',
				'posts_per_page' => 6,
				'orderby' => 'rand'
			);

		$the_query = new WP_Query( $args );*/

		?>

	<div class="main-content-wrap outter-content-wrap 404-page front-page group">
		<div class="slider-shadow"></div>


		<h1 class="outter-page-title">404 Error</h1>
		<p class="center white">Oops, something went wrong. Check out some of these afa fine whiskies and distilleries.</p>

		

		<?php
		/*if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

			if ( has_post_thumbnail() ) {
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			} else {

				$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
			}
*/
		?>
					
		<!-- <div class="product">
			<a href="<?php //the_permalink(); ?>">
				<div class="product-inner">
					<div style="background: url(<?php //echo $featured_img_url; ?>); background-size: contain; background-position: center center; background-repeat: no-repeat;" class="thumb" ></div>
					<div class="info">
						<h2><?php //the_title(); ?></h2>
						<ul>
							<li><?php //the_field('type'); ?></li>
							<li>Region: Islay, Scotland</li>
							<li>ABV: 46%</li>
						</ul>
						<div class="rating-label">Our Rating: </div>
						<img src="assets/5-stars.jpg" width="150" />
					</div>
					<div class="more-info">
						<img src="<?php //echo get_template_directory_uri(); ?>/images/more-info.png">
					</div>
				</div>
			</a>
		</div> -->

		<?php //endwhile; else: ?>
			<!-- <p class="white">There are no whiskies available at the moment.</p> -->
		<?php //endif; ?>

		

		<div class="white" style="text-align: center;">
			<!-- <p>Cat Thumbs Here</p> -->
		</div>


		<div class="clear center">
			<a href="<?php echo get_template_directory_uri(); ?>/whisky">
				<button>Explore Whiskies</button>
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/distilleries">
				<button>Explore Distilleries</button>
			</a>
		</div>

	</div>

	

<?php get_footer(); ?>